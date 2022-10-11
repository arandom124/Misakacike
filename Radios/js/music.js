// géneros
let generos = [{
        id: 1,
        name: "Radios en Vivo",
        img: "../imgR/lad.jpg"
    },
    {
        id: 2,
        name: "Radios en Vivo2",
        img: "../imgR/lad.jpg"

    },
    {
        id: 3,
        name: "Radios en Vivo3",
        img: "../imgR/lad.jpg"

    } 

]

// canciones
let mySongs = [{
        id: 1,
        idGenero: 1,
        name: "Radio ",
        artist: "Abya Yala Silvia",
        path: "http://stream.zeno.fm/3a0d4mna6uhvv",
        image: "../imgR/img_radios/abya_yala.jpg"
    },
    {
        id: 2,
        idGenero: 1,
        name: "NAM MISAK FM",
        path: "http://node-02.zeno.fm/qs9pn8s1ag0uv?rj-ttl=5&rj-tok=AAABevhhtFEA_i2lGRtSGMCzVg",
        image: "../imgR/img_radios/namMi.jpg"
    }, {
        id: 3,
        idGenero: 1,
        name: "LA BACANISIMA SILVIA",
        path: "http://node-08.zeno.fm/u5vywsvamzzuv?rj-ttl=5&rj-tok=AAABevhjA14AIJfW-60goCWtng",
        image: "../imgR/img_radios/bacanisima.jpg"
    }, {
        id: 4,
        idGenero: 1,
        name: "CACIQUE STEREO",
        path: "http://node-15.zeno.fm/c6yqc16g8x8uv?rj-ttl=5&rj-tok=AAABevhj-yEAHxlyv8QFixIauQ",
        image: "../imgR/img_radios/caci.jpg"
    },
    {
        id: 5,
        idGenero: 1,
        name: "Namui Wam ",
        artist: "Silvia.Wambia",
        path: "http://stream.zeno.fm/d2ctyx7x908uv",
        image: "../imgR/img_radios/namuiW.jpg"
    },
    
    {
        id: 6,
        idGenero: 1,
        name: "PERU",
        artist: " CUMBIA.COM",
        path: "http://184.154.28.210:7130/stream?icy=http",
        image: "../imgR/img_radios/per.jpg"
    },
    {
        id: 7,
        idGenero: 1,
        name: "Tomorrowland",
        artist: "One World Radio",
        path: "https://20853.live.streamtheworld.com/OWR_INTERNATIONAL_SC?DIST=TuneIn&TGT=TuneIn&maxServers=2&gdpr=0&us_privacy=1YNY&partnertok=eyJhbGciOiJIUzI1NiIsImtpZCI6InR1bmVpbiIsInR5cCI6IkpXVCJ9.eyJ0cnVzdGVkX3BhcnRuZXIiOnRydWUsImlhdCI6MTYyMTg5ODQzOCwiaXNzIjoidGlzcnYifQ.-7ZOtP2j-ijI41pLarmpSsRJGamqbuYYKGN-gAwS4BY",
        image: "../imgR/img_radios/tomo.jpg"
    },
    {
        id: 8,
        idGenero: 1,
        name: "Radio Nueva",
        artist: "Qqcumbia",
        path: "https://23043.live.streamtheworld.com/CRP_NQAAC.aac",
        image: "../imgR/img_radios/nueva_q.jpg"
    },
    {
        id: 9,
        idGenero: 1,
        name: "La Mega",
        artist: "Bogota",
        path: "https://21933.live.streamtheworld.com/LA_MEGA_BOGAAC.aac?dist=onlineradiobox",
        image: "../imgR/img_radios/mega.jpg"
    },
    // ____________________________2__________________
    {
        id: 10,
        idGenero: 2,
        name: "Mix ",
        artist: " Medellin",
        path: "https://i40.letio.com/29170.aac",
        image: "../imgR/img_radios/mix_medell.jpg"
    },
    {
        id: 11,
        idGenero: 2,
        name: "Olimpica ",
        artist: "Medellin",
        path: "https://i40.letio.com/29128.aac",
        image: "../imgR/img_radios/oli_med.jpg"
    },
    {
        id: 12,
        idGenero: 2,
        name: "Olimpica",
        artist: " Bogota",
        path: "https://i40.letio.com/29114.aac",
        image: "../imgR/img_radios/olimp_bogo.jpg"
    },
    {
        id: 13,
        idGenero: 2,
        name: "Radio Tiempo",
        artist: " Medellin",
        path: "https://i40.letio.com/29144.aac",
        image: "../imgR/img_radios/tiempo_mede.jpg"
    },
    {
        id: 14,
        idGenero: 2,
        name: "Olimpica ",
        artist: " Cali",
        path: "https://i40.letio.com/29120.aac",
        image: "../imgR/img_radios/olim_cali.jpg"
    },
    {
        id: 15,
        idGenero: 2,
        name: "Mix ",
        artist: " Cali",
        path: "https://i40.letio.com/29180.aac",
        image: "../imgR/img_radios/mix_cali.jpg"
    },
    {
        id: 16,
        idGenero: 2,
        name: "RadioTiempo",
        artist: " Cali",
        path: "https://i40.letio.com/29164.aac",
        image: "../imgR/img_radios/tiempo_call.jpg"
    },
    {
        id: 17,
        idGenero: 2,
        name: "Olimpica ",
        artist: " Barranquilla",
        path: "https://i40.letio.com/29102.aac",
        image: "../imgR/img_radios/olim_barr1.jpg"
    },
    {
        id: 18,
        idGenero: 2,
        name: "Mix ",
        artist: " Barranquilla",
        path: "https://i40.letio.com/29156.aac",
        image: "../imgR/img_radios/mix_bbarr.jpg"
    },
    // ____________________3_______________________
    {
        id: 19,
        idGenero: 3,
        name: "Radio tiempo ",
        artist: " Barranquilla",
        path: "https://i40.letio.com/29100.aac",
        image: "../imgR/img_radios/tiempo_barr.jpg"
    },
    {
        id: 20,
        idGenero: 3,
        name: "Olimpica  ",
        artist: " Bucaramanga",
        path: "https://i40.letio.com/29122.aac",
        image: "../imgR/img_radios/olim_bucara.jpg"
    },
    {
        id: 21,
        idGenero: 3,
        name: "Olimpica  ",
        artist: " Pereira",
        path: "https://i40.letio.com/29124.aac",
        image: "../imgR/img_radios/olim_pere.png"
    },
    {
        id: 22,
        idGenero: 3,
        name: "Olimpica  ",
        artist: " Cartegena",
        path: "https://i40.letio.com/29108.aac",
        image: "../imgR/img_radios/olim_carta.jpg"
    },
    {
        id: 23,
        idGenero: 3,
        name: "Tropicana  ",
        artist: " Popayan ",
        path: "https://22983.live.streamtheworld.com/TR_POPAYANAAC.aac?csegid=12000&dist=tropicana_co-web-live_streaming_play&tdsdk=js-2.9&pname=TDSdk&pversion=2.9&banners=none",
        image: "../imgR/img_radios/tropi_popa.jpg"
    },
    {
        id: 24,
        idGenero: 3,
        name: "Tropicana ",
        artist: " Bogotá",
        path: "https://26603.live.streamtheworld.com/TROPICANAAAC.aac?csegid=12000&dist=tropicana_co-web-live_streaming_play&tdsdk=js-2.9&pname=TDSdk&pversion=2.9&banners=300x250&gdpr=0&burst-time=15&sbmid=d3241cc4-4c95-40b8-8bd7-66b9c3c7c300",
        image: "../imgR/img_radios/tropi_boogo.jpg"
    },
    {
        id: 25,
        idGenero: 3,
        name: "Panda   ",
        artist: " Show2",
        path: "http://perseus.shoutca.st:9380/stream?type=http",
        image: "../imgR/img_radios/panda_con_sens.jpg"
    },
    {
        id: 26,
        idGenero: 3,
        name: "Panda   ",
        artist: " Show",
        path: "https://strw1.openstream.co/1279?aw_0_1st.collectionid%3D5743%26stationId%3D5743%26publisherId%3D1303%26k%3D1644271053%26aw_0_azn.pcountry%3D%5B%22US%22%5D%26aw_0_azn.planguage%3D%5B%22es%22%5D%26aw_0_azn.pgenre%3D%5B%22Music%22%5D",
        image: "../imgR/img_radios/panda_sin_cen.jpg"
    },
    {
        id: 27,
        idGenero: 3,
        name: "Mix",
        artist: " Bogota",
        path: "https://i40.letio.com/29172.aac",
        image: "../imgR/img_radios/mix_bogo.jpg"
    }

]

// objeto con una lista vacía
let songsGenero = {
    songs: []
};


// mezcla el array pasado por parámetro y lo retorna
function mezclar(array) {
    let currentIndex = array.length,
        temporaryValue, randomIndex;

    // Mientras queden elementos a mezclar...
    while (0 !== currentIndex) {

        // Seleccionar un elemento sin mezclar...
        randomIndex = Math.floor(Math.random() * currentIndex);
        currentIndex -= 1;

        // E intercambiarlo con el elemento actual
        temporaryValue = array[currentIndex];
        array[currentIndex] = array[randomIndex];
        array[randomIndex] = temporaryValue;
    }

    return array;
}

// compila la data con el template que tiene el id idTemp y lo muestra en el elemento que tiene el id idPlace
function compilarHandlebars(data, idTemp, idPlace) {
    // html del template
    let temp = $(idTemp).html();
    // utilizamos compilar con Handlebars para indicar el template dónde queremos poner la data
    let compilar = Handlebars.compile(temp);
    // compilamos la data dentro del template
    let compilada = compilar(data);
    // mostramos el html del template ya compilado
    $(idPlace).html(compilada);
}


// ponemos en el select la lista de géneros
function getListGeneros() {
    let obj = { generos: generos }
    compilarHandlebars(obj, "#temp_generos", "#select-genero")
}

// al cambiar el género en el select nos tremos las canciones correspondientes
$("#select-genero").change(function() {
    getSongs();
});

// tag audio
let audio = document.getElementById('player');

// obtenemos el listado de las canciones para mostrarlas
function getSongs() {
    audio.pause();
    $("#player").attr("src", "");
    $("#title-song").text("");
    $("#title-song").attr("uk-tooltip", "title: Selecciona una canción");

    getSongsByGenero();
    compilarHandlebars(songsGenero, "#temp_songs", "#playlist")

    // evento click sobre cada item de la canción
    $("#playlist li").click(function() {
        // guardamos el id  del li de la canción seleccionada  en esta variable
        let selected = parseInt($(this).attr("id"));
        let index = songsGenero.songs.findIndex(song => song.id === selected);
        playSong(index);
    });
}

// obtenemos las canciones clasificadas por género
function getSongsByGenero() {
    songsGenero = {
        songs: []
    };

    let idGenero = parseInt($("#select-genero").val());
    mySongs.forEach(function(data, index) {
        if (data.idGenero === idGenero) {
            songsGenero.songs.push(data);
        }
    });

    generos.forEach(function(data, index) {
        if (data.id === idGenero) {
            $("#img-song").attr("src", data.img);
        }
    });
}

// programar la siguiente canción
function scheduleSong(id) {
    // cuando termina pasamos a la siguiente
    audio.onended = function() {
        playSong(id + 1);
    };
}

// play song
function playSong(index) {
    // longitud de las canciones actuales por género
    let long = songsGenero.songs;
    // si no tenemos más canciones para reproducir
    if (index >= long.length) {
        console.log("Se terminó la lista");
        audio.pause();
    } else {
        // colocamos la imágen correspondiente al tema
        $("#img-song").attr("src", songsGenero.songs[index].image);
        // nos tremos el path para reproducir en el tag de audio
        $("#player").attr("src", songsGenero.songs[index].path);
        // cambiamos el rítulo del tema debajo de la imagen
        $("#title-song").text(songsGenero.songs[index].name + " - " + songsGenero.songs[index].artist);
        // le agregamos el tootltip al título
        $("#title-song").attr("uk-tooltip", "title: " + songsGenero.songs[index].name + " - " + songsGenero.songs[index].artist);
        // le ponemos delante del título el icono de la música
        $("#title-song").prepend('<i class="fa fa-music text-white pl-1 pr-2"></i>');
        // mostramos el ecualizador en la cacnión corrspondiente
        showEcualizador("ecualizador_" + songsGenero.songs[index].id);
        // guardamos el id del ecualizador que se está mostrando
        $("#ecualizador-id").val("ecualizador_" + songsGenero.songs[index].id);
        // le damos play
        audio.play();
        // programamos la siguiente canción que llama a esta misma función al terminar
        scheduleSong(index);
    }
}


// mostrar el ecualizador por el id que pasamos por parámetro
function showEcualizador(id) {
    $("#playlist .ecualizador").each(function(i) {
        if ($(this).attr("id") !== id) {
            $(this).css("display", "none");
        } else {
            $(this).css("display", "block");
        }

    });



}
// escondemos los ecualizadores
function hideEcualizador() {
    $(".ecualizador").css("display", "none");
}

// botón reproducción aleatoria
$("#shuffle").click(function() {
    let mezcladas = mezclar(songsGenero.songs);
    hideEcualizador();
    getSongsMezcladas(mezcladas);
    playSong(0);
});


// obtener las canciones mezcladas
function getSongsMezcladas(array) {
    let obj = { songs: array };
    compilarHandlebars(obj, "#temp_songs", "#playlist")

    $("#playlist li").click(function() {
        let selected = parseInt($(this).attr("id"));
        let index = array.findIndex(song => song.id === selected);

        playSong(index);
    });
}



// al pausar
audio.onpause = function() {
    hideEcualizador();
};

// al ejecutarse play
audio.onplay = function() {
    if ($("#ecualizador-id").val() !== "") {
        showEcualizador($("#ecualizador-id").val());
    }
};