    document.getElementById('sub_all').addEventListener('click', function(event) {
        // Prevent the form from submitting immediately
        event.preventDefault();

        // Get form elements
        let name = document.getElementById('name').value.trim();
        let telephone = document.getElementById('telephone').value.trim();
        let comments = document.getElementById('comments').value.trim();

        // Get error message elements
        let nameError = document.getElementById('nameError');
        let telephoneError = document.getElementById('telephoneError');
        let commentsError = document.getElementById('commentsError');

        // Reset error messages and flags
        let isValid = true;
        nameError.classList.add('hidden');
        telephoneError.classList.add('hidden');
        commentsError.classList.add('hidden');

        // Validate Name: not null, string, and does not contain numbers
        if (!name || !/^[a-zA-Z\s]+$/.test(name)) {
            nameError.classList.remove('hidden');
            isValid = false;
        }

        // Validate Telephone: starts with +49 followed by 8 digits
        if (!/^(\+92|0)?3\d{2}[-.\s]?\d{7}$/.test(telephone)) {
            telephoneError.classList.remove('hidden');
            isValid = false;
        }
        

        // Validate Message: not null
        if (!comments) {
            commentsError.classList.remove('hidden');
            isValid = false;
        }

        // If all validations pass, submit the form
        if (isValid) {
            document.getElementById('reused_form').submit();
        }
    });
