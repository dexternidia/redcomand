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