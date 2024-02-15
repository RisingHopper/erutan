/* Cambio de idioma */

const setLang = (lang) =>{
  let requestOptions = {
    method: 'GET',
    redirect: 'follow'
  };

  fetch("http://erutan.test/functions/setLang.php?lang="+lang, requestOptions)
    .then(response => response.text())
    .then(result => console.log("result->" + result))
    .then(location.reload())
    .catch(error => console.log('error', error));
}