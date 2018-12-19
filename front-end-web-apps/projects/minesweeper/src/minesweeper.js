const printBoard = board => {
  //Log 'Current Board'
  console.log('Current Board:');
  //Log the first element of board
  //Add a | separator between each element of board[0]
  console.log(board[0].join(' | '));
  //repeat this for elements 2 and 3 of board
  console.log(board[1].join(' | '));
  console.log(board[2].join(' | '));

  //how to improve
  //numRows = board.length
  // for(let i = 0; i < numRows; ++i){
  // console.log(board[i].join(' | '));
  //}
};

let board = [
  [' ', ' ', ' '],
  [' ', ' ', ' '],
  [' ', ' ', ' ']
];
printBoard(board);
board[0][1] = '1';
board[2][2] = 'B';
printBoard(board);
