function transformDefre(degree) {
  const celsiousExists = degree.toUpperCase().includes('C')
  const fahrenheidExists = degree.toUpperCase().includes('F')

  if(!celsiousExists && !fahrenheidExists) {
    throw new Error('Grau não identificado')
  }

  let updatedDegree = Number(degree.toUpperCase().replace("F", ""));
  let formula = fahrenheit => (fahrenheit - 32) * 5/9
  let degreeSing = 'C'

  if(celsiusExists) {
  updatedDegree = Number(degree.toUpperCase().replace("F", ""));
  formula = celsius => celsius  * 9/5 + 32
  degreeSing = 'F'
  }

  return formula(updatedDegree) + degreeSing
}

try {
  console.log(transformdegree('10C'))
  console.log(transformdegree('50F'))
  trensformDregree('50Z')
} catch (error) {
  console.log(error.message)
}