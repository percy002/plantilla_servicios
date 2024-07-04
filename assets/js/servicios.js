
document.addEventListener('DOMContentLoaded', function() {
    window.agregarProducto = function(titulo) {
        // Obtener la lista de productos desde el localStorage y convertirla a un array
        let productos = JSON.parse(localStorage.getItem('productos')) || [];
        
        // Verificar si el producto ya existe
        let productoIndex = productos.findIndex(producto => producto.titulo === titulo);
        
        if (productoIndex !== -1) {
            productos[productoIndex].cantidad += 1; // Asumiendo que cada producto tiene una propiedad 'cantidad'
        } else {
            productos.push({titulo: titulo, cantidad: 1}); // Añade el producto con una cantidad inicial
        }
        
        localStorage.setItem('productos', JSON.stringify(productos));       
        
    };

    window.eliminarProducto = function(nombre) {
        // Obtener la lista de productos desde el localStorage y convertirla a un array
        // console.log("nombre",nombre);
        let productos = JSON.parse(localStorage.getItem('productos')) || [];
        
        // Verificar si el producto ya existe
        let productoIndex = productos.findIndex(producto => producto.titulo === nombre);
        
        if (productoIndex !== -1) {
            productos.splice(productoIndex, 1); // Elimina el producto
        }
        // console.log("iliminado" ,nombre);
        localStorage.setItem('productos', JSON.stringify(productos));       

        const elementoProducto = document.getElementById(nombre);
        if (elementoProducto) {
            elementoProducto.remove();
        }
        
    }

    window.comprar = function() {
        var datos = localStorage.getItem('productos'); // Asume que 'productos' es tu clave
        if (!datos) {
            alert('No hay productos para comprar.');
            return;
        }

        // Paso 2: Formatear los datos en un mensaje
        // Asumiendo que los datos son un array de objetos JSON
        var productos = JSON.parse(datos);
        var mensaje = 'Quisiera comprar los siguientes servicios:\n';
        productos.forEach(function(producto, index) {
            mensaje += (index + 1) + '. ' + producto.titulo + '\n'; // Asume que cada producto tiene una propiedad 'titulo'
        });

        // Paso 3: Construir la URL de WhatsApp
        var numero = '+51950313771';
        var urlWhatsApp = `https://wa.me/${numero}?text=${encodeURIComponent(mensaje)}`;

        // Paso 4: Abrir esa URL
        window.open(urlWhatsApp, '_blank');
    };
});

document.addEventListener('DOMContentLoaded', function() {
    var modal = document.getElementById('exampleModal');
    modal.addEventListener('show.bs.modal', function (event) {
        var modalBody = document.getElementById('modalBodyContent');
        var datos = localStorage.getItem('productos');
        if (datos) {
            var productos = JSON.parse(datos);
            productos.forEach(function(producto) {
                modalBody.innerHTML += `<div class="servicios-seleccionados" id="${producto.titulo}"><div><p>${producto.titulo}</p></div><div><p>${producto.cantidad}</p></div><div><button class="buCancelar" onclick="eliminarProducto('${producto.titulo}')" aria-label="Eliminar ${producto.titulo.replace(/"/g, '&quot;')}"><i class="fa-solid fa-xmark"></i></button></div></div>`;            });
        } else {
            modalBody.innerHTML = 'No hay datos disponibles';
        }
    });
    modal.addEventListener('hide.bs.modal', function () {
        var modalBody = document.getElementById('modalBodyContent');
        modalBody.innerHTML = ''; // Limpia el contenido de modalBody al cerrar el modal
    });
});