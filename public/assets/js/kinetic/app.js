document.getElementById("myCanvas").addEventListener('contextmenu', function (event) {
    event.preventDefault();
});

var i = 0;
var indexAnterior = 0;
var escenario;
var principal;
var JSONArreglos = [ ];
var colores = ['#D24D57', '#446CB3', '#03C9A9', 'skyblue', '#EB974E' , '#D35400' , 'grey'];


escenario = new Kinetic.Stage({
    container: 'myCanvas',
    width: 600,
    height: 300,
});

principal = new Kinetic.Layer();

escenario.add(principal);
escenario.draw();

function addRect() {

    var index = Math.floor(Math.random() * colores.length);

    while (index == indexAnterior) {
        if (index == indexAnterior) {
            index = Math.floor(Math.random() * colores.length);
        }
    }
    ;

    var rectangulo = new Kinetic.Rect({
        x: 200,
        y: 0,
        width: 120,
        height: 80,
        offset: [50, 35],
        fill: colores[index],
        stroke: 'lightgray',
        strokeWidth: 2,
        draggable: true,
        id: "" + i++
    });

    indexAnterior = index;

    // agregando evento cuando presione Abajo
    window.addEventListener('keydown', function (e) {

        if (e.keyCode == "40") {

            rectangulo.rotateDeg(30);
            principal.draw();
        }

    }, true);


    // agregando evento cuando presione Arriba
    window.addEventListener('keyup', function (e) {

        if (e.keyCode == "38") {

            rectangulo.rotateDeg(-20);
            principal.draw();
        }

    }, true);

    // evento cuando le den click para que gire
    rectangulo.on('click', function () {

        this.rotateDeg(20);
        principal.draw();

        var json = '[  {"id":' + this.getId() + ' , "rotation":' + this.getRotation() + ' , "width":' + this.getWidth() + ' ,	 "height":' + this.getHeight() + ' ,    "fill":' + this.getFill() + ' ,    "stroke":' + this.getStroke() + ' ,	  "strokeWidth":' + this.getStrokeWidth() + ' ,	"draggable":' + false + ' ,"position": {"x":' + this.getPosition().x + ', "y":' + this.getPosition().y + '}}]';
        JSONArreglos[this.getId()] = json;
    });

    rectangulo.on('mouseup', function () {
        var json = '[{"number": "'+this.getId()+'", "rotation": "' + this.getRotation() + '", "width": "' + this.getWidth() + '", "height": "' + this.getHeight()+'",    "fill": "' + this.getFill() + '",    "stroke": "' + this.getStroke() + '",	  "strokeWidth": "' + this.getStrokeWidth() + '",	"draggable":"' + false + '","position": {"x": "' + this.getPosition().x + '", "y":"' + this.getPosition().y + '"}}]';
        // JSONArreglos[this.getId()] = json;

        $.ajax({
            type: "POST",
            url: "save/ubication",
            // The key needs to match your method's input parameter (case-sensitive).
            data: JSON.stringify({ Json: json }),
            contentType: "application/json; charset=utf-8",
            dataType: "json",
            success: function(data){
            }
        });
    });


    // one revolution per 4 seconds
    var angularSpeed = 360 / 4;
    var vectorY = 50;

    var anim = new Kinetic.Animation(function (frame) {
        var angleDiff = frame.timeDiff * angularSpeed / 1000;
        //  rectangulo.rotate(angleDiff);

        rectangulo.setY(vectorY);
        vectorY += 1;

        if (rectangulo.getY() == escenario.getHeight() - rectangulo.getHeight()) {
            anim.stop();
        }
        var json = '[  {"id":' + rectangulo.getId() + ', "rotation":' + rectangulo.getRotation() + ' , "width":' + rectangulo.getWidth() + ' ,	 "height":' + rectangulo.getHeight() + ' ,    "fill":"' + rectangulo.getFill() + '"  ,    "stroke":"' + rectangulo.getStroke() + '"  ,	  "strokeWidth":' + rectangulo.getStrokeWidth() + ' ,	"draggable":' + false + ' ,"position": {"x":' + rectangulo.getPosition().x + ', "y":' + rectangulo.getPosition().y + '}}]';
        JSONArreglos[rectangulo.getId()] = json;

    }, principal);

    anim.start();

    // creacion de un rectangulo
    principal.add(rectangulo);
    principal.draw();

};


escenario.on('click', stgClicked);

// Para el segundo click
function stgClicked(event) {
    if (event.button == 2) {
        var node = event.targetNode;

    }
}



//---------------------PANEL PARA EL SEGUNDO USUARIO------------------------------------------------------------

// Funcion para agregar
function refresh() {

// lectura de los js

// creacion del escenario
    var escenario2 = new Kinetic.Stage({
        container: 'OtheUserCanvas',
        width: 600,
        height: 300,
    });

    var principal2 = new Kinetic.Layer();

    // agregando nuevo layer
    escenario2.add(principal2);
    escenario2.draw();

    for (var i = 0; i < JSONArreglos.length; i++) {

        var obj = jQuery.parseJSON(JSONArreglos[i]);
        console.log(obj[0].width);
        var rectangulo = new Kinetic.Rect({
            x: obj[0].position.x,
            y: obj[0].position.y,
            width: obj[0].width,
            height: obj[0].height,
            rotation: obj[0].rotation,
            offset: [50, 35],
            fill: obj[0].fill,
            stroke: obj[0].stroke,
            strokeWidth: obj[0].strokeWidth,
            draggable: obj[0].draggable,
            id: obj[0].id,
        });
        // creacion de un rectangulo
        principal2.add(rectangulo);
        principal2.draw();

    }
    ;
    window.setInterval(function () {
        refresh()
    }, 500);

}


