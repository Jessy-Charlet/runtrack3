$(document).ready(function () {
	// Initialisation du puzzle
	var puzzle = ["<img src='1.png'/img>", 
	"<img src='2.png'/img>",
	"<img src='3.png'/img>",
	"<img src='4.png'/img>",
	"<img src='5.png'/img>",
	"<img src='6.png'/img>",
	"<img src='7.png'/img>",
	"<img src='8.png'/img>",
	""];
	var emptyIndex = 8;

	function updatePuzzle() {
		$("#puzzle-container").empty();
		for (var i = 0; i < puzzle.length; i++) {
			var piece = $("<div>").addClass("puzzle-piece").html(puzzle[i]);
			if (puzzle[i] === "") {
				piece.addClass("empty");
			}
			$("#puzzle-container").append(piece);
		}
	}

	function isMoveValid(index) {
		var row = Math.floor(index / 3);
		var col = index % 3;

		var emptyRow = Math.floor(emptyIndex / 3);
		var emptyCol = emptyIndex % 3;

		return (Math.abs(row - emptyRow) === 1 && col === emptyCol) ||
			(Math.abs(col - emptyCol) === 1 && row === emptyRow);
	}

	function swapPieces(index) {
		var temp = puzzle[index];
		puzzle[index] = puzzle[emptyIndex];
		puzzle[emptyIndex] = temp;
		emptyIndex = index;
	}

	function checkWin() {
		for (var i = 0; i < puzzle.length - 1; i++) {
			if (puzzle[i] !== i + 1) {
				return false;
			}
		}
		return true;
	}

	function shufflePuzzle() {
		do {
			for (var i = puzzle.length - 2; i > 0; i--) {
				var j = Math.floor(Math.random() * (i + 1));
				var temp = puzzle[i];
				puzzle[i] = puzzle[j];
				puzzle[j] = temp;
			}
		} while (!isSolvable());
	}

	function isSolvable() {
		// calcul le nombre d'invertions
		var inversions = 0;
		for (var i = 0; i < puzzle.length; i++) {
			for (var j = i + 1; j < puzzle.length; j++) {
				if (puzzle[i] > puzzle[j] && puzzle[i] !== "" && puzzle[j] !== "") {
					inversions++;
				}
			}
		}

		//  si la largeur de la grille est paire, vérifiez la ligne de la cellule vide
		if (Math.sqrt(puzzle.length) % 2 === 0) {
			var emptyRow = Math.floor(emptyIndex / 3) + 1;
			inversions += emptyRow;
		}

		// si le nombre total d’inversions est pair, le puzzle peut être résolu
		return inversions % 2 === 0;
	}

	// Initialisation du puzzle et affichage initial
	shufflePuzzle();
	updatePuzzle();

	// Gestionnaire de clic sur les pièces du puzzle
	$("#puzzle-container").on("click", ".puzzle-piece", function () {
		var clickedIndex = $(this).index();

		if (isMoveValid(clickedIndex)) {
			swapPieces(clickedIndex);
			updatePuzzle();

			if (checkWin()) {
				alert("Vous avez gagné!");
				shufflePuzzle();
				updatePuzzle();
			}
		}
	});
});
