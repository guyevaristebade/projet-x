
const gsm = [48.53229135446555, 2.6907041970812577]
const label = "GS Maintenance<br>184 Rue Pascal,<br>77000 Vaux-Le-Pénil"
const map = L.map('map').setView(gsm, 15); // Vue initiale

L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
    attribution: '© OpenStreetMap contributors'
}).addTo(map);


// function to add a marker 
function addMarker(latlng, label) {
    L.marker(latlng).addTo(map)
        .bindPopup(label)
        .openPopup();
}

addMarker(gsm,label);


/* FAQ */ 

const accordeon_header = document.querySelectorAll('.accordeon_header');

accordeon_header.forEach(header => {
    header.addEventListener('click',() => {
        const parentHeader = header.parentElement;
        parentHeader.classList.toggle('open_faq')
        
        const plusIcon = header.querySelector('.plus');
        const minusIcon = header.querySelector('.minus');

        plusIcon.style.display = parentHeader.classList.contains('open_faq') ? 'none' : 'block';
        minusIcon.style.display = parentHeader.classList.contains('open_faq') ? 'block' : 'none';
    });    
});