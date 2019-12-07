// excluir = document.getElementById("btn-excluir");
var $botoes = document.getElementsByClassName("btn-excluir");

// console.log($botoes);
// $botoes.addEventListener("click", function (e) {
//   if (confirm("Confirma a exclusão do Contato ?") == false) {
//     e.preventDefault();
//   }
// });

var excluir = Array.prototype.filter.call($botoes, function ($botoes) {
  $botoes.addEventListener("click", function (e) {
    if (confirm("CONFIRMA A EXCLUSÃO DO CONTATO ?") == false) {
      e.preventDefault();
    }
  });
});





