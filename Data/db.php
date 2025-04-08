<?php



$movies = [
    new Movie(
        'The Prestige',
        'Christopher Nolan',
        2018,
        120,
        "Nella Londra dell'età vittoriana, due maghi-illusionisti, Robert Angier e Alfred Borden, un tempo amici e colleghi, si sfidano ogni sera a distanza mettendo in scena spettacoli al limite del possibile. La loro acerimma rivalità si tramuta in una vera e propria ossessione, che li spinge a mettere in gioco la propria vita con numeri strabilianti per provare a se stessi e al mondo intero la rispettiva superiorità...",
        "./assets/img/prestige.jpg",
        [new Genre('Fantascienza', "film viene ambientato in un contesto legato a una visione più o meno lontana del futuro, come quello dei viaggi interstellari, quello del contatto con entità extraterrestri, quello dei conflitti nucleari o delle catastrofi climatiche globali.")]
    ),
    new Movie(
        'Inception',
        'Christopher Nolan',
        2005,
        118,
        "Dom Cobb possiede una qualifica speciale: è in grado di inserirsi nei sogni altrui per prelevare i segreti nascosti nel più profondo del subconscio. Viene contattato da Saito, un potentissimo industriale giapponese."
        ,
        "./assets/img/inception.jpg",

        [
            new Genre('Thriller', "Per definirsi tale, un thriller deve infatti provocare emozioni forti nel lettore, in particolare suspense ed eccitazione che devono accompagnare la narrazione con improvvisi picchi o cadute nel livello della tensione, con momenti di calma alternati a momenti più frenetici."),
            new Genre('Horror', "L'orrore o in inglese horror è un genere di romanzi, film o altri tipi di opere che mira a suscitare nel lettore o spettatore sentimenti di spavento e orrore. Tipici sono la letteratura dell'orrore e il cinema dell'orrore.")
        ]
    ),
    new Movie(
        'Io Sono Leggenda',
        'Tim Burton',
        2020,
        115,
        "New York, 2012. Un misterioso virus ha ucciso quasi tutti gli uomini e li ha trasformati in vampiri. L'unico essere umano sopravvissuto al contagio è il dottor Robert Neville, che lotta disperatamente per trovare una cura.",
        "./assets/img/leggends.jpg",

        [new Genre('Thriller', "In un thriller, il protagonista deve spesso fermare i piani criminali dell'antagonista e i crimini sono normalmente compiuti su larga scala: omicidi seriali o di massa, atti di terrorismo oppure rovesciamenti di governi. Il pericolo e gli scontri più o meno violenti sono spesso elementi fondamentali della trama.")]
    )
]
    ?>