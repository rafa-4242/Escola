async function generatePDF() {
    // Import the jsPDF module
    const { jsPDF } = window.jspdf;
    const name = document.getElementById('name').value;
    const email = document.getElementById('email').value;
    const doc = new jsPDF();
    doc.text(`Nome: ${name}`, 10, 10);
    doc.text(`Email: ${email}`, 10, 20);
    doc.save('form-data.pdf');
    }