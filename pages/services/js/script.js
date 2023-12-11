    const tabsBtn = document.querySelectorAll(".countries__btn"),
            tabsItems = document.querySelectorAll(".countries__item");

    tabsBtn.forEach(function(item) {
        item.addEventListener("click", function() {
            let currentBtn = item,
                tabId = currentBtn.getAttribute("data-tab"),
                currentTab = document.querySelector(tabId);

            tabsBtn.forEach(item => {
                item.classList.remove('active');
            });
            tabsItems.forEach(item => {
                item.classList.remove('active');
            });

            currentBtn.classList.add('active');
            currentTab.classList.add('active');
        });      
    });
