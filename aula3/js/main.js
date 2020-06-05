function trocarCor(cor) {
    let dv = document.getElementById("dvDisplay");
    if (dv!=null) {
        dv.style.backgroundColor = cor;
    } else {
        console.log("não encontrei a div");
    }
}
