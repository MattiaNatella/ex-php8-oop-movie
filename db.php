<?php



$movies = [
    new Movie('The Prestige', 'Christopher Nolan', 2018, 120, [new Genre('Fantascienza', "film viene ambientato in un contesto legato a una visione più o meno lontana del futuro, come quello dei viaggi interstellari, quello del contatto con entità extraterrestri, quello dei conflitti nucleari o delle catastrofi climatiche globali.")]),
    new Movie(
        'Inception',
        'Christopher Nolan',
        2005,
        118,
        [
            new Genre('Thriller', 'Descrizione Thriller'),
            new Genre('Horror', 'Descrizione Horror')
        ]
    ),
    new Movie(
        'Io Sono Leggenda',
        'Tim Burton',
        2020,
        115,
        [new Genre('Thriller', "In un thriller, il protagonista deve spesso fermare i piani criminali dell'antagonista e i crimini sono normalmente compiuti su larga scala: omicidi seriali o di massa, atti di terrorismo oppure rovesciamenti di governi. Il pericolo e gli scontri più o meno violenti sono spesso elementi fondamentali della trama.")]
    )
]
    ?>