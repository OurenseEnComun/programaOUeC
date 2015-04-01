# programaOUeC
Plataforma para a creación participada dun programa para o Concello de Ourense

Graciñas mil ao traballo da xente de Ganemos Zaragoza (o código orixinal é seu), e
de Ahora Madrid e Marea Atlántica, que adaptaron o código e agora nós aproveitamos
o seu gran traballo :-)

## Version 0.2

Esta é a versión que estamos a usar en Ourense en Común, e onde aplicamos os nosos
parches sobre as modificacións de Ahora Madrid e a Marea Atlántica.

Para instalala simplemente fai un ```git clone``` deste repositorio.

Precisarás un arquivo de configuración en ```programa-colaborativo_0.2/lib/config.php```, que entre outras cousas indicará os datos de acceso á Base de Datos (que terás que crear no teu MySQL, coa correspondente usuaria). Tes un esqueleto deste arquivo listo para usar en ```programa-colaborativo_0.2/lib/config.php.dist```

Para que funcione o recaptcha de Google, que é o que se usa para evitar _spammers_, terás que cambiar as chaves polas túas propias en ```alta.php``` en ```vistas/login.html```.
