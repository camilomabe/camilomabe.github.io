<!doctype html>
<html lang="en">
   <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
      <title>Login Page</title>
   </head>
   <body class="bg-light">
      <div class="container">
      <main>
         <div class="py-5 text-center">
            <h2>Formulario de pago</h2>
         </div>
         <div class="row g-3">
            <div class="col-md-5 col-lg-4 order-md-last">
               <h4 class="d-flex justify-content-between align-items-center mb-3">
                  <span class="text-muted">Your cart</span>
                  <span class="badge bg-secondary rounded-pill">3</span>
               </h4>
               <ul class="list-group mb-3">
                  <li class="list-group-item d-flex justify-content-between lh-sm">
                     <div>
                        <h6 class="my-0">Product name</h6>
                        <small class="text-muted">Brief description</small>
                     </div>
                     <span class="text-muted">$12</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-sm">
                     <div>
                        <h6 class="my-0">Second product</h6>
                        <small class="text-muted">Brief description</small>
                     </div>
                     <span class="text-muted">$8</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between lh-sm">
                     <div>
                        <h6 class="my-0">Third item</h6>
                        <small class="text-muted">Brief description</small>
                     </div>
                     <span class="text-muted">$5</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between bg-light">
                     <div class="text-success">
                        <h6 class="my-0">Promo code</h6>
                        <small>EXAMPLECODE</small>
                     </div>
                     <span class="text-success">−$5</span>
                  </li>
                  <li class="list-group-item d-flex justify-content-between">
                     <span>Total (USD)</span>
                     <strong>$20</strong>
                  </li>
               </ul>
               <form class="card p-2">
                  <div class="input-group">
                     <input type="text" class="form-control" placeholder="Promo code">
                     <button type="submit" class="btn btn-secondary">Redeem</button>
                  </div>
               </form>
            </div>
            <div class="col-md-7 col-lg-8">
               <!--DATOS PERSONALES -->
               <h4 class="mb-3">Dirección de Envio</h4>
               <form class="needs-validation" novalidate="">
                  <div class="row g-3">
                     <div class="col-sm-6">
                        <label for="pais" class="form-label">País</label>
                        <select class="form-control" name = "pais" id="pais" placeholder="País" value="" required="">
                           <option value="">Selenncione...</option>
                           <option>United States</option>
                           <option>Mexico</option>
                           <option>Colombia</option>
                           <option>Argentina</option>
                           <option>Brasil</option>
                           <option>Ecuador</option>
                        </select>
                        <div class="invalid-feedback">
                           Pais requerido.
                        </div>
                     </div>
                     <div class="col-sm-6">
                        <label for="ciudad" class="form-label">Ciudad</label>
                        <select class="form-control" name = "ciudad" id="ciudad" placeholder="Ciudad" value="" required="">
                           <option value="">Selenncione...</option>
                           <option>Washington D. C.</option>
                           <option>Ciudad de México</option>
                           <option>Bogotá</option>
                           <option>Buenos Aires</option>
                           <option>Brasilia</option>
                           <option>Quito</option>
                        </select>
                        <div class="invalid-feedback">
                           Ciudad requerido.
                        </div>
                     </div>
                     <div class="row g-3">
                        <div class="col-sm-6">
                           <label for="firstName" class="form-label">Nombre de pila</label>
                           <input type="text" class="form-control" id="firstName" placeholder="" value="" required="">
                           <div class="invalid-feedback">
                              Valid first name is required.
                           </div>
                        </div>
                        <div class="col-sm-6">
                           <label for="lastName" class="form-label">Apellidos</label>
                           <input type="text" class="form-control" id="lastName" placeholder="" value="" required="">
                           <div class="invalid-feedback">
                              Valid last name is required.
                           </div>
                        </div>
                        <div class="col-6">
                           <label for="username" class="form-label">Nombre de usuario</label>
                           <div class="input-group">
                              <span class="input-group-text">@</span>
                              <input type="text" class="form-control" id="username" placeholder="you@example.com" required="">
                              <div class="invalid-feedback">
                                 Your username is required.
                              </div>
                           </div>
                        </div>
                        <div class="col-6">
                           <label for="email" class="form-label">Correo electrónico <span class="text-muted">(Optional)</span></label>
                           <input type="email" class="form-control" id="email" placeholder="you@example.com">
                           <div class="invalid-feedback">
                              Please enter a valid email address for shipping updates.
                           </div>
                        </div>
                        <div class="col-6">
                           <label for="address" class="form-label">Dirección de residencia</label>
                           <input type="text" class="form-control" id="address" placeholder="1234 Main St" required="">
                           <div class="invalid-feedback">
                              Please enter your shipping address.
                           </div>
                        </div>
                        <div class="col-6">
                           <label for="address2" class="form-label">Dirección de residencia<span class="text-muted">(Opcional)</span></label>
                           <input type="text" class="form-control" id="address2" placeholder="Apartment or suite">
                        </div>
                        <div class="col-md-4">
                           <label for="country" class="form-label">Country</label>
                           <select class="form-select" name = "country" id="country" required="">
                              <option value="">Selenncione...</option>
                              <option>United States</option>
                              <option>Mexico</option>
                              <option>Colombia</option>
                              <option>Argentina</option>
                              <option>Brasil</option>
                              <option>Ecuador</option>
                           </select>
                           <div class="invalid-feedback">
                              Please select a valid country.
                           </div>
                        </div>
                        <div class="col-md-4">
                           <label for="state" class="form-label">City</label>
                           <select class="form-select" id="state" required="">
                              <option value="">Selenncione...</option>
                              <option>Washington D. C.</option>
                              <option>Ciudad de México</option>
                              <option>Bogotá</option>
                              <option>Buenos Aires</option>
                              <option>Brasilia</option>
                              <option>Quito</option>
                           </select>
                           <div class="invalid-feedback">
                              Please provide a valid state.
                           </div>
                        </div>
                        <div class="col-md-2">
                           <label for="zip" class="form-label">Código Postal</label>
                           <input type="text" class="form-control" id="zip" placeholder="" required="">
                           <div class="invalid-feedback">
                              Zip code required.
                           </div>
                        </div>
                     </div>
                     <br>
                     <hr class="my-4">
                     <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="same-address">
                        <label class="form-check-label" for="same-address">La dirección de envío es la misma que mi dirección de facturación</label>
                     </div>
                     <div class="form-check">
                        <input type="checkbox" class="form-check-input" id="save-info">
                        <label class="form-check-label" for="save-info">Guarde esta información para la próxima vez</label>
                     </div>
                     <hr class="my-4">
                     <h4 class="mb-3">Medio de pago</h4>
                     <br>
                     <div class="row gy-3">
                        <div class="col-md-3">
                           <label class="form-check-label" for="credit">Tarjeta de crédito</label>
                           <input id="credit" name="paymentMethod" type="radio" class="form-check-input" required="">
                           <div class="invalid-feedback">
                              Medio de pago requerido.
                           </div>
                        </div>
                        <div class="col-md-3">
                           <label class="form-check-label" for="debit">Tarjeta de débito</label>
                           <input id="debit" name="paymentMethod" type="radio" class="form-check-input" required="">
                        </div>
                        <div class="col-md-3">
                           <label class="form-check-label" for="paypal">PayPal</label>
                           <input id="paypal" name="paymentMethod" type="radio" class="form-check-input" required="">
                        </div>
                        <style type="text/css">
                           .imagen{width: 236px; height: 131px ; border: 0px; }
                        </style>
                        <script>
                           function mostrar(){
                           var archivo = document.getElementById("file").files[0];
                           var reader = new FileReader();
                             if (file) {
                               reader.readAsDataURL(archivo );
                               reader.onloadend = function () {
                               document.getElementById("img").src = reader.result;
                             }
                           }
                           }
                        </script>
                        
                        <div class="col-md-3">
                           <input type="file" id="file" accept="image/*" onchange="mostrar()"/>
                           <br>
                           <img class="imagen" id="img">
                        </div>
                     </div>

                     <div class="row gy-3">
                        <div class="col-md-5">
                           <label for="cc-name" class="form-label">Nombre de la tarjeta</label>
                           <input type="text" class="form-control" id="cc-name" placeholder="" required="">
                           <small class="text-muted">Como aparece en la tarjeta</small>             
                           <div class="invalid-feedback">
                              Name on card is required
                           </div>
                        </div>
                        <div class="col-md-3">
                           <label for="cc-number" class="form-label">Número de tarjeta</label>
                           <input type="text" class="form-control" id="cc-number" placeholder="" required="">
                           <div class="invalid-feedback">
                              Credit card number is required
                           </div>
                        </div>
                        <div class="col-md-2">
                           <label for="cc-expiration" class="form-label">Vencimiento</label>
                           <input type="text" class="form-control" id="cc-expiration" placeholder="" required="">
                           <div class="invalid-feedback">
                              Expiration date required
                           </div>
                        </div>
                        <div class="col-md-2">
                           <label for="cc-cvv" class="form-label">CVV</label>
                           <input type="text" class="form-control" id="cc-cvv" placeholder="" required="">
                           <div class="invalid-feedback">
                              Security code required
                           </div>
                        </div>

                     </div>
                     <hr class="my-4">
                     <button class="w-100 btn btn-primary btn-lg" type="submit" onclick="myFunction()" >Continue to checkout</button>

              <script>
                    function myFunction() {
                    alert("¡Hola!\n¿Deseas enviar la informacion?");
                    }
              </script>
              
               </form>
               </div>
            </div>
      </main>
      <footer class="my-5 pt-5 text-muted text-center text-small">
      <p class="mb-1">Camilo Mamian Becerra</p>
      <ul class="list-inline">
      <li class="list-inline-item"><a href="#">Privacidad</a></li>
      <li class="list-inline-item"><a href="#">Condiciones</a></li>
      <li class="list-inline-item"><a href="#">Soporte</a></li>
      </ul>
      </footer>
      </div>
      <script src="./principal/bootstrap.bundle.min.js.descarga" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script src="./principal/form-validation.js.descarga"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-ygbV9kiqUc6oa4msXn9868pTtWMgiQaeYH7/t7LECLbyPA2x65Kgf80OJFdroafW" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.5.4/dist/umd/popper.min.js" integrity="sha384-q2kxQ16AaE6UbzuKqyBE9/u/KzioAlnx2maXQHiDX9d4/zp8Ok3f+M7DPm+Ib6IU" crossorigin="anonymous"></script>
      <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.min.js" integrity="sha384-pQQkAEnwaBkjpqZ8RU1fF1AKtTcHJwFl3pblpTlHXybJjHpMYo79HY3hIi4NKxyj" crossorigin="anonymous"></script>
   </body>
</html>