<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>La liste des opérateurs miniers</title>
<style type="text/css">
<!--
.Style1 {font-family: Arial, Helvetica, sans-serif}
-->
</style>
</head>

<body>
<table width="1288" border="0" align="center">
  <tr>
    <td height="570" align="center" valign="top"><table width="1322" border="0">
      <tr>
        <td width="177" align="center" valign="middle"><img src="{{asset('images/armoirie.png')}}" width="150" height="149" /></td>
        <td width="1135" align="center" valign="middle"><table width="1060" border="0">
          <tr>
            <td width="1054" align="left" valign="middle"><span class="Style1">Ministè des Mines</span></td>
          </tr>
          <tr>
            <td align="left" valign="middle"><span class="Style1">Liste des Opérateurs Minières Oeuvrant en République démocratique du congo</span></td>
          </tr>
        </table></td>
      </tr>
      <tr>
        <td>&nbsp;</td>
        <td>&nbsp;</td>
      </tr>
      <tr>
        <td height="384" colspan="2" align="center" valign="top"><table width="1323" border="0" align="center">
          <tr>
            <td width="35" align="left" valign="middle"><span class="Style1">N°</span></td>
            <td width="107" align="left" valign="middle"><span class="Style1">Denomination</span></td>
            <td width="65" align="left" valign="middle"><span class="Style1">Sigle</span></td>
            <td width="74" align="left" valign="middle"><span class="Style1">Adresse</span></td>
            <td width="64" align="left" valign="middle"><span class="Style1">Nature</span></td>
            <td width="107" align="left" valign="middle"><span class="Style1">Raison sociale</span></td>
            <td width="111" align="left" valign="middle"><span class="Style1">Regime fiscal</span></td>
            <td width="109" align="left" valign="middle"><span class="Style1">Année création</span></td>
            <td width="109" align="left" valign="middle"><span class="Style1">N° surccursale</span></td>
            <td width="104" align="left" valign="middle"><span class="Style1">Capital social</span></td>
            <td width="98" align="left" valign="middle"><span class="Style1">Boite postal</span></td>
            <td width="59" align="left" valign="middle"><span class="Style1">N° fax</span></td>
            <td width="97" align="left" valign="middle"><span class="Style1">N° téléphone</span></td>
            <td width="47" align="left" valign="middle"><span class="Style1">Mail</span></td>
            <td width="75" align="left" valign="middle"><span class="Style1">Site web</span></td>
          </tr>
          @foreach($operats as $operat)
          <tr>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->id}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->denomination}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->sigle}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->adresse}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->nature}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->raison_sociale}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->regime_fiscal}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->annee_creation}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->nbre_surccursale}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->capital_social}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->boite_postal}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->num_fax}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->num_telephone}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->mail}}</span></td>
            <td align="left" valign="middle"><span class="Style1">{{ $operat->site_web}}</span></td>
          </tr>
          @endforeach
        </table></td>
        </tr>
    </table></td>
  </tr>
</table>
</body>
</html>
