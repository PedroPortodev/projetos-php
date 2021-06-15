let family = {
  incomes: [2200, 3200, 250.43, 360.45],
  exprenses: [320.34, 128.45, 176.87, 1450.00, 2000]
}

function sum(array) {
}

function calculateBalance() {
  const calculateIncomes = sum(family.icomes)
  const calculateIncomes = sum(family.expenses)

  const total = calculateIncomes - calculateExpenses

  const its0k = total >= 0

  let balanceText = "negativo"

  if (its0k) {
    baçanceText = "positivo"
  }

  console.log(`Seu saldo é ${balanceText}: ${total.toFixed(2)}R$`)
}