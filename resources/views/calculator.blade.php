<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hesap Makinesi</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
        }

        .calculator-container {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            width: 300px;
            text-align: center;
        }

        h1 {
            font-size: 24px;
            margin-bottom: 20px;
        }

        input, select, button {
            width: 100%;
            padding: 10px;
            margin: 10px 0;
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
        }

        button {
            background-color: #4CAF50;
            color: white;
            cursor: pointer;
            border: none;
        }

        button:hover {
            background-color: #45a049;
        }

        .result {
            margin-top: 20px;
            font-size: 18px;
            font-weight: bold;
            color: #333;
        }

        .error {
            color: red;
            font-size: 16px;
        }

    </style>
</head>
<body>
    <div class="calculator-container">
        <h1>Hesap Makinesi</h1>

        <form action="/calculate" method="POST">
            @csrf
            <input type="number" id="number1" name="number1" placeholder="Birinci Sayı" required><br>
            <input type="number" id="number2" name="number2" placeholder="İkinci Sayı" required><br>

            <select name="operation" required>
                <option value="add">Toplama</option>
                <option value="subtract">Çıkarma</option>
                <option value="multiply">Çarpma</option>
                <option value="divide">Bölme</option>
            </select><br>

            <button type="submit">Hesapla</button>
        </form>

        @if (isset($result))
            <div class="result">
                Sonuç: {{ $result }}
            </div>
        @endif

        @if (isset($error))
            <div class="error">
                {{ $error }}
            </div>
        @endif
    </div>
</body>
</html>
