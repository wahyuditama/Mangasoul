 // Fungsi untuk mendapatkan tanggal dalam format "Month day, year"
 function getFormattedDate() {
    const options = {
        year: 'numeric',
        month: 'long',
        day: 'numeric'
    };
    const formattedDate = new Date().toLocaleDateString('en-US', options);

    return formattedDate;
}

// Mendapatkan semua elemen dengan class "date" dan mengisi dengan tanggal saat ini
const dateElements = document.querySelectorAll('.date');
dateElements.forEach(element => {
    element.textContent = getFormattedDate();
});