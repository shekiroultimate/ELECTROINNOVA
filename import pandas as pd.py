import pandas as pd

# Cargar el archivo Excel
archivo = "73036.csv"  # Reemplaza con tu archivo
df = pd.read_excel(archivo)

# Lista de años a eliminar
anios_eliminar = [2008, 2009, 2010]

# Filtrar el DataFrame eliminando las filas con esos años
df = df[~df['Año'].isin(anios_eliminar)]  # Asegúrate de que la columna se llama 'Año'

# Guardar el nuevo archivo sin esas filas
df.to_excel("73036.csv.xlsx", index=False)

print("Las filas con los años 2008, 2009 y 2010 han sido eliminadas con éxito.")
