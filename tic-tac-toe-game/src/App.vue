<script setup>
import { ref, computed } from 'vue'

const player = ref('X')
const board = ref([
  ['', '', ''],
  ['', '', ''],
  ['', '', '']
])

const CalculateWinner = (board) => {
  const lines = [[0, 1, 2],[3, 4, 5],[6, 7, 8],[0, 3, 6],[1, 4, 7],[2, 5, 8],[0, 4, 8],[2, 4, 6]]

  for (let i = 0; i < lines.length; i++) {
    const [a, b, c] = lines[i]

    if (board[a] && board[a] === board[b] && board[a] === board[c]) {
      return board[a]
    }
  }

  return null
}

const winner = computed(() => CalculateWinner(board.value.flat()))

const MakeMove = (x, y) => {
	if (winner.value) return

	if (board.value[x][y]) return

	board.value[x][y] = player.value

	player.value = player.value === 'X' ? 'O' : 'X'
}

const ResetGame = () => {
	board.value = [
		['', '', ''],
		['', '', ''],
		['', '', '']
	]
	player.value = 'X'
}

</script>
<template>
  <main>
    
    <h1>TIC TAC TOE</h1>
    <h3>player {{player}} 's turn</h3>
    <div class="board">
      <div class="flex">
        <div
          v-for="(row, x) in board"
          :key="x"
          class="flex1"
        >
          <div
            v-for="(cell, y) in row"
            :key="y"
            @click="MakeMove(x, y)"
            class="board-cell"
            :class="{ 'text-pink-500': cell === 'X', 'text-blue-400': cell === 'O' }"
          >
            <span v-if="cell === 'X'">x</span>
            <span v-else-if="cell === 'O'">o</span>
          </div>
        </div>
      </div>
    </div>

     <div class="text-center">
      <h2 v-if="winner" class="text-6xl font-bold mb-8">Player '{{ winner }}' wins!</h2>
      <button @click="ResetGame" class="reset-button">Reset</button>
    </div>
  </main>
</template>

<style>
body {
  background-color: #1f2937;
  color: #fff;
}

.flex{
  display:flex;
}

.board-cell {
  border: 1px solid #fff;
  width: 6rem;
  height: 6rem;
  display: flex;
  align-items: center;
  justify-content: center;
  font-size: 2rem;
  cursor: pointer;
  transition: background-color 0.3s;
}

.board-cell:hover {
  background-color: #4b5563;
}

h1,h3,h2{
  padding-top:10px;
  text-align:center;
}
 .reset-button {
  padding: 0.5rem 1rem;
  background-color: '#fuchsia';
  border: none;
  border-radius: 0.25rem;
  font-weight: bold;
  text-transform: uppercase;
  cursor: pointer;
  transition: background-color 0.3s;
} 

.reset-button:hover {
  background-color: #d946ef;
}
</style>