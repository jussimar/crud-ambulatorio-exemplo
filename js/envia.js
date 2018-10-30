$(document).on("change","#lista",function(){
        $.ajax({
          type:"get",
          url:"https://maquina-2ifem-jussimar.c9users.io/listaParaSelect.php",
          data: "codigo="+$("#lista").val(),
          dataType:"json",
          success: function(data){
                var itemlista = "<tr><th>Cod. Médico:</th><th>Cod. Ambulatório:</th><th>Ambulatório</th><th>Médico</th></tr>";
                $.each(data.lista, function(i, dados){
                    itemlista += "<tr>";
                    itemlista +="<td>"+dados.codigoMedico+"</td>";
                    itemlista +="<td>"+dados.codigoAmb+"</td>";
                    itemlista +="<td>"+dados.nomeAmbulatorio+"</td>";
                    itemlista +="<td>"+dados.nomeMedico+"</td>";
                    itemlista +="</tr>";
                });
                
                $("#tabela").html(itemlista);
            },
       error:function(data){
           alert("Erro: "+data);
       }
        });
    });