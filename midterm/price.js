function calculatePrice() {
    const floor = parseInt(document.getElementById('floor').value);
    const stayLength = parseInt(document.getElementById('stay_length').value);
    const roomType = document.querySelector('input[name="room_type"]:checked').value;
    const discountType = document.querySelector('input[name="discount"]:checked').value;

    let roomPrice = 0;

    if (roomType === 'standard') {
        roomPrice = 500000;
    } else if (roomType === 'superior') {
        roomPrice = 750000;
    } else if (roomType === 'deluxe') {
        roomPrice = 1500000;
    }

    let totalPrice = roomPrice * stayLength;

    if (floor > 5) {
        totalPrice += 100000;
    }

    if (discountType === 'member') {
        totalPrice *= 0.9; 
    } else if (discountType === 'birthday') {
        totalPrice -= 500; 
    }

  totalPrice = Math.max(totalPrice, 0);

  const resultDiv = document.getElementById('totalPriceResult');
  resultDiv.innerHTML = `<p>Total Price: IDR ${totalPrice.toLocaleString()}</p>`;
}