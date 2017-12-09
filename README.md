# redcomand

                <tr>
                  <td class="text-uppercase" style="background: #E0E0E0;"><b><i class="fa fa-map-marker"></i> Parroquia:</b></td>
                  <td class="text-uppercase">
                    <?php 
                      $parroquia = \App\ParroquiaCne::all();
                    ?>
                    <?php echo $parroquia->where('id_municipio',$ubch->municipio->id_municipio)->first()->nombre; ?>
                    </td>
                </tr>


                if(isset($candidatos[0]))
                {
                    $centro_nombre = $candidatos[0]->centros_clp->nombre;
                }
                else
                {
                    $centro_nombre = "";
                }