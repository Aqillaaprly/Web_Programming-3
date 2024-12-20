<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <title>Edit Data Anggota</title>
        <link rel="stylesheet" href="style.css">
    </head>
    <body>
        <?php
            // Include the PDO connection file
            include('koneksi.php'); 

            // Check if the 'id' parameter is set
            if (!isset($_GET['id']) || empty($_GET['id'])) {
                die("ID not provided.");
            }

            $id = $_GET['id'];

            try {
                // Prepare the SELECT query
                $query = "SELECT * FROM anggota WHERE id = :id";
                $stmt = $conn->prepare($query); // Use $conn (PDO instance) from koneksi.php
                $stmt->bindParam(':id', $id, PDO::PARAM_INT); // Bind the ID as an integer
                $stmt->execute(); // Execute the query

                // Fetch the data
                $row = $stmt->fetch(PDO::FETCH_ASSOC);

                // Check if data was found
                if (!$row) {
                    die("Data not found.");
                }
            } catch (PDOException $e) {
                die("Error: " . $e->getMessage());
            }
        ?>
        <div class="container">
            <h2>Edit Data Anggota</h2>
            <form action="proses.php?aksi=ubah" method="post">
                <input type="hidden" name="id" value="<?php echo htmlspecialchars($row['id']); ?>">
                <label for="nama">Nama: </label>
                <input type="text" name="nama" id="nama" value="<?php echo htmlspecialchars($row['nama']); ?>" required>
                <label for="jenis_kelamin">Jenis Kelamin: </label>
                <div class="radio-group">
                    <input type="radio" name="jenis_kelamin" value="L" id="laki" <?php echo $row['jenis_kelamin'] === 'L' ? 'checked' : ''; ?> required><label for="laki">Laki-laki</label>
                    <input type="radio" name="jenis_kelamin" value="P" id="perempuan" <?php echo $row['jenis_kelamin'] === 'P' ? 'checked' : ''; ?> required><label for="perempuan">Perempuan</label>
                </div>
                <label for="alamat">Alamat: </label>
                <input type="text" name="alamat" id="alamat" value="<?php echo htmlspecialchars($row['alamat']); ?>" required>
                <label for="no_telp">No. Telp: </label>
                <input type="text" name="no_telp" id="no_telp" value="<?php echo htmlspecialchars($row['no_telp']); ?>" required>
                <button type="submit">Simpan Perubahan</button> <a href="index.php" class="btn-kembali">Kembali</a>
            </form>
        </div>
    </body>
</html>
