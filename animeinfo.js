function toggleDescription() {
    const description = document.querySelector('.description_details');
    const moreText = document.querySelector('.more');
    
    if (description.classList.contains('expanded')) {
        description.classList.remove('expanded');
        moreText.textContent = 'more';
    } else {
        description.classList.add('expanded');
        moreText.textContent = 'less';
    }
}