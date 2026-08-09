document.urlSaatIni=(window.location.pathname).split("/");
if((document.urlSaatIni[3]==="public")&&(document.urlSaatIni[4]==="")){
    idHtmlBeranda.classList.add("active");
}else if(document.urlSaatIni[4]==="mahasiswa"){
    idHtmlMahasiswa.classList.add("active");
    idHtmlBeranda.classList.remove("active");
}else if(document.urlSaatIni[4]==="about"){
    idHtmlTentang.classList.add("active");
    idHtmlBeranda.classList.remove("active");
}