# Vamos a crear mi primera calculadora!!!!
mesa = input("¿Hola, que mesa reservó?: ",)
mesa = int(mesa)

consumo = input("¿cuanto fue su consumo total?: ")
propina = input(
    "¿teniendo en cuenta que la propina es voluntaria y la atencion recibida, cuanto desea dar de propina en modo de porcentaje? ")

consumo_total = float(consumo) * float(propina) / 100
resultado_operacion = print(
    f"considerando que el monto total fue de: {consumo}, su propina equivale a {consumo_total}")
