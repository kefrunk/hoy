
<h1>Quienes somos</h1>

<p><?php $cadena = Texto::model()->findByAttributes(array('nombre' => 'Quienes somos P1'));  echo $cadena->valor; ?></p>

<p><?php $cadena = Texto::model()->findByAttributes(array('nombre' => 'Quienes somos P2')); echo $cadena->valor; ?></p>

<p><?php $cadena = Texto::model()->findByAttributes(array('nombre' => 'Quienes somos P3')); echo $cadena->valor; ?></p>


<ul>
<li>Rotulación de vehículos: automóviles, furgonetas, autocares, camiones, etc.</li>
<li>Rotulación de fachadas.</li>
<li>Rótulos luminosos.</li>
<li>Lonas plásticas.</li>
<li>Rótulos corpóreos.</li>
<li>Vallas publicitarias.</li>
<li>Cartelería</li>
<li>Impresión digital de pequeño y gran formato.</li>
</ul>
