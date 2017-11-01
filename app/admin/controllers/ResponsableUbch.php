 <?php
namespace App\admin\controllers;
use App\Municipio;
use App\Parroquia;
use App\Ubch;
use Carbon\Carbon;
use App\Institucion;
use App\Partido;
use App\Estructura;
use System\tools\rounting\Redirect;

class ResponsableUbch
{
    function __construct()
    {
        Role('admin');
    }

    public function index()
    {
        $ubch = Ubch::all();
        View(compact('ubch'));
    }

    public function parroquias()
    {
        extract($_GET);
        $parroquias = Parroquia::where('id_municipio',$idMunicipio)->get();
        //var_dump($parroquias);
        echo "<option value=''>PARROQUIA</option>";
        echo "<option value=''></option>";
        foreach ($parroquias as $key => $parroquia) {
            echo '<option value="'.$parroquia->id_parroquia.'">'.$parroquia->nombre.'</option>';
        } 
    }

    public function verificar_email()
    {
        extract($_GET);

        if($email)
        {
            $solicitante = Solicitante::where('email',$email)->first();
            
            if(!empty($solicitante))
            {
                $existe = 1;
            }
            else
            {
                $existe = 0;
            }
        }
        else
        {
            $existe = 0;
        }
    
        echo json_encode($existe);
    }

    public function create()
    {
        $ubch= Ubch::find(0);
        $instituciones = Institucion::all();
        $partidos = Partido::all();   
        $estructura = Estructura::all();     
        View(compact('ubch','instituciones','partidos','estructura')); 
        //Arr($solicitante);

    }

    public function store()
    {
        //Arr($_POST);
        extract($_POST);
        extract($_GET);

        //Arr($_POST);
        $fecha_hora_registro = Carbon::now();
        list($fecha_registro,$hora_registro) = explode(' ', $fecha_hora_registro);
        $ubch = new Ubch;
        $ubch->nacionalidad = $nacionalidad;
        $ubch->cedula = $cedula;
        $ubch->nombre_apellido = $nombre_apellido;
        $ubch->email = $email;
        $ubch->telefono_1 = $telefono_1;
        $ubch->telefono_2 = $telefono_2;
        $ubch->vehiculo = $vehiculo;
        $ubch->id_instituciones = $id_instituciones;
        $ubch->id_partidos = $id_partidos;
        $ubch->id_estructura = $id_estructura; 
        $ubch->eliminar = 0;

        if($ubch->save())
        {
            Success('solicitantes/'.$ubch->id,'El registro fue guardado.');
        }
        else
        {
            Error('solicitantes/','Error al ingresar ubch.');
        }
    }

    public function show($id)
    {
        $ubch = Solicitante::find($id);
        View(compact('ubch'));
    }

    public function edit($id)
    {
        View(compact('id'));
    }

    public function update($id)
    {

    }

    public function destroy($id)
    {

    }
}
