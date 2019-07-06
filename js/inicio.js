// window.onload=function(){
//     let btn=document.getElementById("cerrarsession")
//     btn.onclick=cerrarsession;
// };
let app=new Vue({
    el:"#inicio",
    data:{
        // NombreUsuario:localStorage.getItem("NomUsuario"),
        NombreUsuario:"",
        DataC:{
            IdUsu:"",
            Opcion:""
        }
    },
   created:function () {
        if (localStorage.getItem("IdUsuario")===null){
            alert("No se Logueo sadisfactoriamente");
            window.location.href="./index.html";
        }
        let data;
        this.DataC.IdUsu=localStorage.getItem("IdUsuario");
        this.DataC.Opcion=5;
        this.$http.post('./backend/controler/Usuario.php',
            {datos: this.DataC}
            ).then(function (respose) {
                data=respose.body[0][0];
                console.log(respose);
                this.NombreUsuario=data;
            });
    },
    methods:{
        cerrarsession:function () {
            this.DataC.Opcion=4;
            let errores=[];
            this.$http.post('./backend/controler/Usuario.php',
                {datos:this.DataC}
            ).then(function (respose) {
                console.log(respose);
            });
            alert("Cerrando session");
            localStorage.clear();
            window.location.href="./index.html";
        }
    }
});
// function cerrarsession() {
//     let Opcion=4;
//     let errores=[];
//     this.$http.post('./backend/controler/Usuario.php',
//         {datos:Opcion}
//     ).then(function (respose) {
//         console.log(respose);
//     });
//     localStorage.clear();
//     window.location.href="./index.html";
// }