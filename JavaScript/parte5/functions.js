dunction sayMyName(name) {
  console.log('antes de execultar a função callback')

  name()

  console.log('depois de execultar a callback')
}

sayMyName(
  () => {
    console.log('estou em uma callback')
  }
)