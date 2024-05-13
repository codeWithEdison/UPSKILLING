let carPark = new Array(3);

function isCarParkFull() {
    const occupiedSlots = carPark.filter(slot => slot !== undefined).length;
    return occupiedSlots === carPark.length;
}

function parkCar(carNumberPlate, date, time) {
    const slotIndex = carPark.findIndex(slot => slot === undefined);
    if (slotIndex !== -1) {
        carPark[slotIndex] = { carNumberPlate, date, time };
        return true; // Car parked successfully
    } else {
        return false; // Car park is full
    }
}

function removeCar(slotIndex) {
    if (slotIndex >= 0 && slotIndex < carPark.length) {
        carPark[slotIndex] = undefined;
        return true; // Car removed successfully
    } else {
        return false; // Invalid slot index
    }
}

function traverseCarPark() {
    carPark.forEach((car, index) => {
        if (car !== undefined) {
            console.log(`Slot ${index}: ${car.carNumberPlate}, parked on ${car.date} at ${car.time}`);
        } else {
            console.log(`Slot ${index}: Empty`);
        }
    });
}

// Testing the program
parkCar("ABC123", "2024-05-12", "08:00");
parkCar("XYZ456", "2024-05-12", "09:30");
// parkCar("XYZ456", "2024-05-12", "09:30");
parkCar("DEF789", "2024-05-12", "10:45");
removeCar(0);
traverseCarPark();
console.log("Is car park full?", isCarParkFull());
