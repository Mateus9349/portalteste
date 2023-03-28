<script>
    // Criar QR Code em PDF
function createQRCodePDF() {
var qrcode = new QRCode("qrcode", {
text: "Produto: " + $("#produto_mostrar").text() + ", Produtor: " + $("#produtor_mostrar").text() + ", Avaliação da Coleta: " + $("#avaliacao_mostrar").text() + ", Locais de Coleta: " + $("#local_mostrar").text() + ", Peso Bruto (kg): " + $("#bruto_mostrar").text() + ", Peso Líquido (kg): " + $("#liquido_mostrar").text() + ", Reprovado (kg): " + $("#reprovado_mostrar").text() + ", Valor por kg(R$): " + $("#valor_mostrar").text() + ", Valor a Pagar(R$): " + $("#pagar_mostrar").text() + ", Data de Cadastro: " + $("#data_cad_mostrar").text() + ", Responsável: " + $("#corretor_mostrar").text(), {
align: "justify",
margin: [0, 20, 0, 20]
});
doc.addImage($("#target_mostrar").attr('src'), 'JPEG', 15, 40, 180, 180);
doc.save('lote_' + $("#produto_mostrar").text() + '_' + $("#produtor_mostrar").text() + '.pdf');
});
</script>