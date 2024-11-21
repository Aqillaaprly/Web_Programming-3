function calculatePrice() {
    var floor = document.getElementById('floor').value;
    var roomType = document.querySelector('input[name="room_type"]:checked').value;
    var stayLength = document.getElementById('stay_length').value;
    var discount = document.querySelector('input[name="discount"]:checked').value;

    var roomPrice = 0;
    var discountAmount = 0;

    if (roomType === 'standard') {
        roomPrice = 500000;
    } else if (roomType === 'superior') {
        roomPrice = 750000;
    } else if (roomType === 'deluxe') {
        roomPrice = 1500000;
    }

    var totalPriceBeforeDiscount = roomPrice * stayLength;

    if (discount === 'member') {
        discountAmount = totalPriceBeforeDiscount * 0.10; // 10% discount
        document.getElementById('discountType').innerHTML = "Discount: Member (10%)";
    } else if (discount === 'birthday') {
        discountAmount = totalPriceBeforeDiscount - 500; 
        document.getElementById('discountType').innerHTML = "Discount: Birthday Promo (IDR 500)";
    } else {
        document.getElementById('discountType').innerHTML = "Discount: None";
    }

    var finalPrice = totalPriceBeforeDiscount - discountAmount;

    document.getElementById('totalPriceResult').innerHTML = "Total Price: IDR " + finalPrice.toLocaleString();
    document.getElementById('totalPriceBeforeDiscount').innerHTML = "Price Before Discount: IDR " + totalPriceBeforeDiscount.toLocaleString();
    document.getElementById('discountType').innerHTML = "Discount Type:  " + discount.toLocaleString();   
}