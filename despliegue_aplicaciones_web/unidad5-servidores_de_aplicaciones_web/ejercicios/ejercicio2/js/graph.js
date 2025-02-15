const ctx = document.getElementById("chart");

new Chart(ctx, {
    type: "doughnut",
    data: {
        labels: labelsValues,
        datasets: [
            {
                data: dataValues,
                backgroundColor: [
                    "#FF5733",
                    "#28A745",
                    "#00BCD4",
                    "#E91E63",
                    "#9C27B0",
                    "#673AB7",
                    "#3F51B5",
                    "#2196F3",
                    "#03A9F4",
                    "#009688",
                    "#8BC34A",
                    "#CDDC39",
                    "#FFEB3B",
                    "#FFC107",
                    "#795548",
                    "#9E9E9E",
                    "#607D8B",
                ],
                hoverOffset: 4,
            },
        ],
    },
});
