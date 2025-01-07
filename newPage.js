
document.querySelectorAll('.destination').forEach(dest => {
    dest.onclick = () => {
        const flight = dest.getAttribute('data-flight');
        const hotel = dest.getAttribute('data-hotel');
        const insurance = dest.getAttribute('data-insurance');
        const attractions = dest.getAttribute('data-attractions');
        const destinationName = dest.querySelector('p').innerText;
        const imageUrl = dest.querySelector('img').src;  

        const totalCost = parseInt(flight) + parseInt(hotel) + parseInt(insurance) + parseInt(attractions);

        // Crea il contenuto HTML per la nuova finestra pop-up
        const popupContent = `
            <html>
            <head>
                <title>Informazioni su ${destinationName}</title>
                <style>
                    body {
                        font-family: Arial, sans-serif;
                        text-align: center;
                        margin: 0;
                        padding: 0;
                    }
                    img {
                        width: 50%; /* Riduci la larghezza dell'immagine al 50% */
                        height: auto;
                        margin-top: 20px;
                    }
                    .info {
                        font-size: 18px;
                        margin-top: 20px;
                        font-style: italic; /* Imposta il testo in corsivo */
                    }
                    .back-button {
                        background-color: #3498db;
                        color: white;
                        border: none;
                        padding: 10px 20px;
                        font-size: 18px;
                        cursor: pointer;
                        border-radius: 5px;
                        margin-top: 20px;
                    }
                    .back-button:hover {
                        background-color: #2980b9;
                    }
                </style>
            </head>
            <body>
                <h2>${destinationName}</h2>
                <img src="${imageUrl}" alt="${destinationName}">
                <div class="info">
                    <p><strong>Costo Aereo:</strong> €${flight}</p>
                    <p><strong>Costo Hotel:</strong> €${hotel}</p>
                    <p><strong>Costo Assicurazione:</strong> €${insurance}</p>
                    <p><strong>Costo Attrazioni con Guida:</strong> €${attractions}</p>
                    <p><strong>Costo Totale:</strong> €${totalCost}</p>
                </div>
                <button class="back-button" onclick="window.close()">Torna indietro</button>
            </body>
            </html>
        `;

        
        const popupWindow = window.open('', '', 'fullscreen=yes');
        popupWindow.document.write(popupContent);
        popupWindow.document.close(); 
        popupWindow.moveTo(0, 0);
        popupWindow.resizeTo(screen.width, screen.height);
    };
});
