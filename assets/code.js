const app = new (function() {
    this.tbody = document.getElementById('tbody');
    this.id = document.getElementById('id');
    this.nombres = document.getElementById("nombres");
    this.email = document.getElementById("email");

    this.listado=()=>{
        fetch("../controllers/listado.php")
        .then((res) => res.json())
        .then((data)=>{
            this.tbody.innerHTML= "";
            data.forEach((item)=>{
                this.tbody.innerHTML += `
                <tr>
                    <td>${item.id}</td>
                    <td>${item.nombre}</td>
                    <td>${item.correo}</td>
                    <td>
                    <a href="javascript:;" class="btn btn-danger btn-sm" onclick="app.eliminar(${item.id})">Eliminar</a>
                    </td>
                </tr>
                `
            })
        })
        .catch((error)=>console.log(error))
    }

    this.guardar = () => {
        var form = new FormData();
        form.append("nombres", this.nombres.value);
        form.append("email", this.email.value);
        form.append("id", this.id.value);
        if (this.id.value === "") {
          fetch("../controllers/guardar.php", {
            method: "POST",
            body: form,
          })
            .then((res) => res.json())
            .then((data) => {
              alert("Creado con exito");
              this.listado();
              this.limpiar();
            })
            .catch((error) => console.log(error));
        }
      };

    this.eliminar = (id)=>{
        var form= new FormData();
        form.append("id",id);
        fetch('../controllers/eliminar.php',{
            method: "POST",
            body: form
        })
       .then((res) => res.json())
       .then((data)=>{
            alert ("Eliminado correctamente");
            this.listado();
        })
       .catch((error)=>console.log(error))
    }
})();
app.listado();