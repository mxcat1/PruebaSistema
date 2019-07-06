
window.onload=function(){
    // let txtRcontra=document.getElementById("txtPassRUsuR");
    // let txtcontra=document.getElementById("txtPassUsuR");
    // txtRcontra.onblur=function(){
    //     if (txtRcontra.value!==txtcontra.value){
    //         alert("Las Contraseña no es igual")
    //     }
    // };
    let anonb=document.getElementById("nbAFenacUsuR");
    let mescb=document.getElementById("cbMFenacUsuR");
    let dianb=document.getElementById("nbDFenacUsuR");
    let sexom=document.getElementById("rbSexoHUsusR");
    function calculodias(){
        let valor,mes1;
        valor=parseInt(mescb.value);
        mes1=valor%2;
        if (valor===2){
            if (parseInt(anonb.value)%4===0){
                if (parseInt(anonb.value)%100===0){
                    if (parseInt(anonb.value)%400===0){
                        dianb.max="29";
                    }else{
                        dianb.max="28";
                    }
                } else{
                    dianb.max="29";
                }
            }else{
                dianb.max="28";
            }
        }else{
            if (valor>=8){
                if (mes1===0){
                    dianb.max="31";
                }else{
                    dianb.max="30";
                }
            }else{
                if (mes1!==0){
                    dianb.max="31";
                }else{
                    dianb.max="30";
                }
            }
        }
        dianb.value=1;

    }
    sexom.checked=true;
    mescb.onchange=calculodias;
    anonb.onchange=calculodias;
};
let appindex=new Vue({
    el:"#app",
    data:{
        DatosRUsuario:{
            Opcion:"",
            Nombre:"",
            Apellido:"",
            Correo:"",
            Fecha:"",
            Sexo:"",
            Pais:"",
            Region:"",
            Ciudad:"",
            Celular:"",
            NickName:"",
            Contra:"",
            RContra:""
        },
        logueo:{
            Opcion:"",
            NickNameL: "",
            ContraL: ""
        },
        // compararcontras:"",
        Errores:[]
    },
    methods:{
        registrarUsuario:function () {
            let dia=document.getElementById("nbDFenacUsuR");
            let mes=document.getElementById("cbMFenacUsuR");
            let ano=document.getElementById("nbAFenacUsuR");
            // let fecha=`${dia.value}/${mes.value}/${ano.value}`;
            let fecha=`${ano.value}/${mes.value}/${dia.value}`;
            this.DatosRUsuario.Fecha=fecha;
            this.DatosRUsuario.Opcion=1;
            if (this.Errores.length<=0) {
                this.Errores.pop();
                this.$http.post('./backend/controler/Usuario.php',
                    {datos:this.DatosRUsuario}
                ).then(function (respose) {
                    // if (respose.body["dato"]){
                    //     window.location.href="./cuenta_creada.html";
                        console.log(respose.body["dato"])
                        console.log(respose)
                    // }
                });

            } else {
                alert("Hay Errores");
                this.Errores.push("Hay Errores")
            }
            console.log(this.Errores)

        },
        verificarnicknameR:function () {
            this.DatosRUsuario.Opcion=2;
            let errores=[];
            this.$http.post('./backend/controler/Usuario.php',
                {datos:this.DatosRUsuario}
            ).then(function (respose) {
                console.log(respose);
                if (respose.body[0][0]>=1){
                    errores.push("Nombre de Usuario ya en uso");
                    alert("Nombre de Usuario ya en uso")
                    //document.getElementById("txtNickUsuR").focus();
                }else{
                    errores.pop();
                }
            });
            this.Errores=errores;
            console.log(this.Errores)
        },
        verificarcontra:function () {
            if (this.DatosRUsuario.RContra!==this.DatosRUsuario.Contra){
                alert("Las Contraseñas no son iguales");
                this.Errores.push("Las Contraseñas no son iguales");
            } else{
                this.Errores.pop();
            }
            console.log(this.Errores)
        },
        logueoUsuario:function () {
            if (this.logueo.NickNameL!=="" && this.logueo.ContraL!==""){
                this.logueo.Opcion=3;
                let errores=[];
                this.$http.post('./backend/controler/Usuario.php',
                    {datos:this.logueo}
                ).then(function (respose) {
                    console.log(respose);
                    if (respose.body.length<=0){
                        errores.push("No se encontro al Usuario");
                        alert("No se encontro al Usuario, Contraseña o Nombre de ususario Inconrrectos")
                        let txtnickl=document.getElementById("txtNickName")
                        txtnickl.value="";
                        let txtcontral=document.getElementById("txtPassUsuario")
                        txtcontral.value="";
                        txtnickl.focus();
                    }
                    else{
                        window.location.href="./inicio.php";
                        console.log(respose.body[0][0]);
                        localStorage.setItem("IdUsuario",respose.body[0][0]);
                        localStorage.setItem("NomUsuario",respose.body[0][1]);
                    }
                    console.log(respose.body.length)
                });
                //this.logueo.NickNameL="";
                //this.logueo.ContraL="";
            }
            else {
                alert("llene el campo nombre de usuario y contraseña")
            }
        }
    },
});

