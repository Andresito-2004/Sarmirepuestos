
document.addEventListener("DOMContentLoaded", () => {
    // Escuchamos et click del botón
const $boton = document.querySelector("#btnCrearPdt");
    $boton.addEventListener("click", () => {
    const $elementoParaConvertir = document.body; // <- Aquí puedes elegir cunîquier elemento a
    html2pdf()
    .set({
    margin: 1,   
    filename: 'Sarmirepuestos.pdf',
    image: {
    type: 'jpeg',
    quality: 0.98
    },
    html2canvas: {
        scate: 3, // mayor escala, mejores gráficos, pero más peag letterRendering: true,
        letterRendering: true,
    },
    jsPDF:{
    unit:"in",
    format: "a3",
    orientation: "portrait" // Lonoscape o portrait
    
    }
})
    
    .from($elementoParaConvertir) 
    .Save()
    .catch(err => console.leg(err))
    .finally()
    .then (() => {
        console.log("guardado..")


    })

});
});
