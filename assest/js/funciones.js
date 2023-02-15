
    $('#calcular').on('click', function(){
        const id = document.getElementById("id_alumno").value;
        const nombre = document.getElementById("nombre_alumno").value;
        const matematicas = document.getElementById("nota_matematicas").value;
        const fisica = document.getElementById("nota_fisica").value;
        const programacion = document.getElementById("nota_programacion").value;
    
        var params = {
            'id': id,
            'nombre': nombre,
            'matematicas': matematicas,
            'fisica': fisica,
            'programacion': programacion
        };
        
        $.ajax({
            type: 'post',
            url: 'controller/alumnos.php',
            data: params,
            dataType: 'json',
            success:function(response){
                console.log(response);
                $('#promedio').text(response['notasPromedio']['matematicas']);
                $('#promedioFisica').text(response['notasPromedio']['fisica']);
                $('#promedioProgramacion').text(response['notasPromedio']['programacion']);
                $('#AprobadosMatematicas').text(response['numAprobados']['matematicas']);
                $('#AprobadosFisica').text(response['numAprobados']['fisica']);
                $('#AprobadosProgramacion').text(response['numAprobados']['programacion']);
                $('#Aplazados').text(response['numAplazados']);
                $('#AprobaronTodas').text(response['numAprobaronTodas']);
                $('#AprobaronUna').text(response['numAprobaronUna']);
                $('#AprobaronDos').text(response['numAprobaronDos']);
                $('#NotaMaximaMatematicas').text(response['notasMaximas']['matematicas']);
            }
        });
        
    });
