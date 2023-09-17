document.addEventListener("DOMContentLoaded", () => {
    const gameList = document.getElementById("game-list");
    const gameFrame = document.getElementById("game-frame");

    // Sample game data (replace with your game data from PHP)
    const games = [
        { name: "Game 1", url: "game1.html" },
        { name: "Game 2", url: "game2.html" },
        // Add more games as needed
    ];

    // Function to load a game in the iframe
    function loadGame(gameUrl) {
        gameFrame.src = gameUrl;
    }

    // Create game buttons dynamically
    games.forEach((game) => {
        const button = document.createElement("button");
        button.textContent = game.name;
        button.addEventListener("click", () => loadGame(game.url));
        gameList.appendChild(button);
    });
});
