function afiseazaInfo(id) {
    // Referința către caseta de informații
    var infoBox = document.getElementById('info-box');
    
    // Verificăm dacă infoBox-ul este deja vizibil
    if (infoBox.style.display === 'block' && infoBox.dataset.id === id) {
        // Dacă este deja vizibil și același jucător a fost selectat, îl ascundem
        infoBox.style.display = 'none';
        infoBox.dataset.id = ''; // Resetăm ID-ul
    } else {
        // În funcție de ID-ul jucătorului, vom afișa informațiile corespunzătoare
        switch (id) {
            case 'info-s1mple':
                infoBox.innerHTML = '<h3>s1mple (Oleksandr "s1mple" Kostyliev)</h3><p>Considerat unul dintre cei mai buni jucători din istoria CS:GO, s1mple a câștigat multiple turnee internaționale.</p>';
                break;
            case 'info-zywoo':
                infoBox.innerHTML = '<h3>zywoo (Mathieu "ZywOo" Herbaut)</h3><p>ZywOo este un jucător de top din Franța, cunoscut pentru abilitatea sa incredibilă de a domina meciurile.</p>';
                break;
            case 'info-monesy':
                infoBox.innerHTML = '<h3>monesy (Ilya "m0NESY" Osipov)</h3><p>Un tânăr talent din Rusia, m0NESY a atras atenția mondială datorită abilității sale impresionante de a juca cu AWP.</p>';
                break;
            case 'info-donk':
                infoBox.innerHTML = '<h3>donk (Danil "donk" Kryshkovets)</h3><p>Donk este un jucător de CS:GO din Kazahstan care a câștigat rapid notorietate datorită performanțelor sale.</p>';
                break;
            case 'info-sh1ro':
                infoBox.innerHTML = '<h3>sh1ro (Dmitry "sh1ro" Sokolov)</h3><p>sh1ro este un jucător din Rusia, membru al echipei Cloud9, recunoscut pentru precizia sa.</p>';
                break;
            default:
                infoBox.innerHTML = '';
        }

        // Setăm ID-ul jucătorului pentru a verifica dacă facem click din nou pe același jucător
        infoBox.dataset.id = id;

        // Afișăm caseta de informații
        infoBox.style.display = 'block';
    }
}
