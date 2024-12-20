
export class MModificarPregunta {
    constructor() {}

    async mModificarPregunta(formData) {
        try {
            const response = await fetch('index.php?c=Preguntas&m=cGuardarModificacionPregunta', {
                method: 'POST',
                body: formData,
            });

            if (response.ok) {
                const result = await response.text(); 
                if (result === 'correcto') {
                    window.location.href = "index.php?c=Preguntas&m=cMostrarPreguntasyRespuestas";
                } else {
                    const error = document.querySelector('.errorMensaje');
                    error.innerHTML = result; 
                    error.style.display = 'block';
                }
            } else {
                const error = document.querySelector('.errorMensaje');
                error.innerHTML = 'Error al conectar con el servidor. Inténtelo más tarde.';
                error.style.display = 'block';
            }
        } catch (error) {
            console.error('Error de conexión:', error);
            const errorElemento = document.querySelector('.errorMensaje');
            errorElemento.innerHTML = 'Error de conexión.';
            errorElemento.style.display = 'block';
        }
    }
}
