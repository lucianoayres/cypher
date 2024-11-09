let currentPlayer = "X"
let board = Array(9).fill(null)
let gameOver = false

document.addEventListener("DOMContentLoaded", () => {
    const gameBoard = document.getElementById("game-board")
    for (let i = 0; i < 9; i++) {
        const cell = document.createElement("div")
        cell.classList.add("cell")
        cell.dataset.index = i
        cell.addEventListener("click", handleCellClick)
        gameBoard.appendChild(cell)
    }
})

function handleCellClick(event) {
    const cell = event.target
    const index = cell.dataset.index

    if (board[index] || gameOver) {
        return
    }

    board[index] = currentPlayer
    cell.textContent = currentPlayer
    cell.classList.add("taken")

    if (checkWinner(currentPlayer)) {
        document.getElementById("status").textContent = `Player ${currentPlayer} wins!`
        gameOver = true
        return
    }

    if (board.every((cell) => cell)) {
        document.getElementById("status").textContent = "It's a tie!"
        gameOver = true
        return
    }

    currentPlayer = currentPlayer === "X" ? "O" : "X"
    document.getElementById("status").textContent = `Player ${currentPlayer}'s turn`
}

function checkWinner(player) {
    const winningCombos = [
        [0, 1, 2],
        [3, 4, 5],
        [6, 7, 8],
        [0, 3, 6],
        [1, 4, 7],
        [2, 5, 8],
        [0, 4, 8],
        [2, 4, 6],
    ]

    return winningCombos.some((combo) => {
        return combo.every((index) => board[index] === player)
    })
}

function restartGame() {
    currentPlayer = "X"
    board = Array(9).fill(null)
    gameOver = false
    document.getElementById("status").textContent = `Player X's turn`

    const cells = document.querySelectorAll(".cell")
    cells.forEach((cell) => {
        cell.textContent = ""
        cell.classList.remove("taken")
    })
}
