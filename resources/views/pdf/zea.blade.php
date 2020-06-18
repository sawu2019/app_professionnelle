<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>La liste des ZEAs</title>
<style type="text/css">
<!--
.Style1 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body>
<table width="1072" border="0" align="center">
  <tr>
    <td width="1066" height="570" align="center" valign="top"><table width="1052" border="0">
      <tr>
        <td width="199" align="center" valign="middle"><img src="{{asset('images/armoirie.png')}}" width="150" height="149" /></td>
        <td width="843" align="center" valign="middle"><table width="570" border="0">
          <tr>
            <td width="564" align="left" valign="middle"><span class="Style1">Ministè des Mines</span></td>
          </tr>
          <tr>
            <td align="left" valign="middle"><span class="Style1">Liste des Zones d'Exploitation Artisanal en République démocratique du Congo</span></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="384" colspan="2" align="center" valign="top"><table width="1060" border="0" align="center">
          <tr>
            <td width="100" align="left" valign="middle"><span class="Style1">N°</span></td>
            <td width="100" align="left" valign="middle"><span class="Style1">ANNEE</span></td>
            <td width="100" align="left" valign="middle"><span class="Style1">N. ARRETE</span></td>
            <td width="100" align="left" valign="middle"><span class="Style1">FILIERES</span></td>
            <td width="100" align="left" valign="middle"><span class="Style1">PROVINCE</span></td>
            <td width="100" align="left" valign="middle"><span class="Style1">QUALIFICATION DU SITE</span></td>
            <td width="100" align="left" valign="middle"><span class="Style1">TRANSFORTION</span></td>
          </tr>
          @foreach($zeas as $zea)
          <tr>
            <td align="left" valign="middle"><span class="Style1">{{ $zea->id}}</span></td>
            @if($zea->province)
            <td align="left" valign="middle"><span class="Style1">{{ $zea->province->nom}}</span></td>
            @endif
            <td align="left" valign="middle"><span class="Style1">{{ $zea->filie}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $zea->narrete}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $zea->qualification}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $zea->transformation}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $zea->annee}}</span></td>
          </tr>
          @endforeach
        </table></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
