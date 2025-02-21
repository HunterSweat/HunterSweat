



document.addEventListener('DOMContentLoaded', () => {
    // Get all accordion containers
    const accordionItems = document.querySelectorAll('.accordion .acontainer');

    accordionItems.forEach(item => {
        // Get the label and content for each accordion item
        const label = item.querySelector('.label');
        const content = item.querySelector('.content');

        // Set initial content height to 0 if not active
        if (!item.classList.contains('active')) {
            content.style.height = '0';
        }

        label.addEventListener('click', () => {
            // Check if this item is currently active
            const isActive = item.classList.contains('active');

            // Close all accordion items
            accordionItems.forEach(otherItem => {
                otherItem.classList.remove('active');
                const otherContent = otherItem.querySelector('.content');
                otherContent.style.height = '0';
            });

            // If it wasn't active before, open it now
            if (!isActive) {
                item.classList.add('active');
                // Set height to auto first to get the full height
                content.style.height = 'auto';
                const fullHeight = content.scrollHeight + 'px';
                // Reset to 0 and then to full height for animation
                content.style.height = '0';
                // Use setTimeout to ensure the transition happens
                setTimeout(() => {
                    content.style.height = fullHeight;
                }, 10);
            }
        });
    });
});





