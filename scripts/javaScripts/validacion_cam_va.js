function validarformva(){
    var a = document.getElementById('caja_code');
    var b = document.getElementById('caja_name');
    var c = document.getElementById('caja_cont');
    var d = document.getElementById('caja_reg');
    var e = document.getElementById('caja_area');
    var f = document.getElementById('caja_yi');
    var g = document.getElementById('caja_po');
    var h = document.getElementById('caja_ev');
    var i = document.getElementById('caja_gnp');
    var j = document.getElementById('caja_gnpold');
    var k = document.getElementById('caja_nl');
    var l = document.getElementById('caja_gb');
    var m = document.getElementById('caja_gober');
    var n = document.getElementById('caja_cap');
    var o = document.getElementById('caja_code2');
   

    if(a.value===''|| b.value===''|| c.value===''|| d.value===''|| e.value===''|| f.value===''|| g.value===''|| h.value===''|| i.value===''|| j.value===''|| k.value===''|| l.value===''|| m.value===''|| n.value===''|| o.value===''){
        alert("Llene los campos HDPTA");
        return false;
    }
    return true;
}