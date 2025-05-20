<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Pendaftaran Sekolah</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }
        
        body {
            background: linear-gradient(to bottom, #7AC670, #368C2A);
            min-height: 100vh;
            display: flex;
            flex-direction: column;
        }
        
        .header {
            display: flex;
            justify-content: flex-end;
            padding: 1rem 2rem;
            color: white;
        }
        
        .header-contact {
            display: flex;
            gap: 2rem;
        }
        
        .header-contact span {
            display: flex;
            align-items: center;
            gap: 0.5rem;
        }
        
        .main-container {
            flex: 1;
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 1rem;
        }
        
        .card {
            background-color: white;
            border-radius: 1rem;
            padding: 2rem;
            width: 100%;
            max-width: 800px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            position: relative;
        }
        
        .logo {
            width: 180px;
            height: 180px;
            margin: 0 auto 1rem;
        }
        
        .background-text {
            position: absolute;
            top: 35%;
            left: 50%;
            transform: translate(-50%, -50%);
            font-size: 4rem;
            font-weight: bold;
            color: rgba(0, 0, 0, 0.03);
            white-space: nowrap;
            z-index: 0;
        }
        
        h1 {
            font-size: 2.5rem;
            color: #333;
            margin-bottom: 1rem;
            position: relative;
            z-index: 1;
        }
        
        p {
            font-size: 1.2rem;
            color: #555;
            margin-bottom: 3rem;
            line-height: 1.6;
        }
        
        .buttons {
            display: flex;
            gap: 1rem;
            justify-content: center;
        }
        
        .btn {
            padding: 1rem 2rem;
            border-radius: 0.5rem;
            font-size: 1.2rem;
            font-weight: bold;
            cursor: pointer;
            border: none;
            width: 250px;
            transition: background-color 0.3s;
        }
        
        .btn-back {
            background-color: #FFD89C;
            color: #666;
        }
        
        .btn-register {
            background-color: #FFA726;
            color: #333;
        }
        
        .btn-back:hover {
            background-color: #FFCB7D;
        }
        
        .btn-register:hover {
            background-color: #FF9800;
        }
        
        @media (max-width: 768px) {
            .header {
                flex-direction: column;
                align-items: center;
            }
            
            h1 {
                font-size: 2rem;
            }
            
            p {
                font-size: 1rem;
            }
            
            .buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .background-text {
                font-size: 3rem;
            }
        }
    </style>
</head>
<body>
    <div class="header">
        <div class="header-contact">
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"/>
                </svg>
                +62 811 234 4578
            </span>
            <span>
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor" viewBox="0 0 16 16">
                    <path d="M0 4a2 2 0 0 1 2-2h12a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V4Zm2-1a1 1 0 0 0-1 1v.217l7 4.2 7-4.2V4a1 1 0 0 0-1-1H2Zm13 2.383-4.708 2.825L15 11.105V5.383Zm-.034 6.876-5.64-3.471L8 9.583l-1.326-.795-5.64 3.47A1 1 0 0 0 2 13h12a1 1 0 0 0 .966-.741ZM1 11.105l4.708-2.897L1 5.383v5.722Z"/>
                </svg>
                inlemailsekolah@gmail.com
            </span>
        </div>
    </div>
    
    <div class="main-container">
        <div class="card">
            <img src="data:image/svg+xml;base64,PHN2ZyB4bWxucz0iaHR0cDovL3d3dy53My5vcmcvMjAwMC9zdmciIHZpZXdCb3g9IjAgMCAyMDAgMjAwIj48ZGVmcz48c3R5bGU+LmNscy0xe2ZpbGw6IzAwODczNzt9LmNscy0ye2ZpbGw6I2ZmYzMwMDt9LmNscy0ze2ZpbGw6I2ZmZmZmZjt9PC9zdHlsZT48L2RlZnM+PHRpdGxlPnNjaG9vbC1sb2dvPC90aXRsZT48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xODguMDksOTkuODRjMCw0OC44NS0zOS42Miw4OC40Ny04OC40Nyw4OC40N1MxMS4xNSwxNDguNjksMTEuMTUsOTkuODQsMzIuNDYsMTEuMzcsODEuMzEsMTEuMzcsMTg4LjA5LDUxLDE4OC4wOSw5OS44NFoiLz48cGF0aCBjbGFzcz0iY2xzLTIiIGQ9Ik0xNzQuNDQsOTkuODRjMCw0MS4zLTMzLjUyLDc0LjgyLTc0LjgyLDc0LjgyUzI0LjgsMTQxLjE0LDI0LjgsOTkuODQsNDIuNTcsMjQuMzEsODMuODcsMjQuMzEsMTc0LjQ0LDU4LjUzLDE3NC40NCw5OS44NFoiLz48cGF0aCBjbGFzcz0iY2xzLTEiIGQ9Ik0xNTIuMjEsOTkuODRjMCwzMC4xLTI0LjQsNTQuNS01NC41LDU0LjVzLTU0LjUtMjQuNC01NC41LTU0LjVTNTcuODcsNDQuNjMsODgsNDQuNjMsMTUyLjIxLDY5LjczLDE1Mi4yMSw5OS44NFoiLz48cGF0aCBjbGFzcz0iY2xzLTMiIGQ9Ik0xMjEuODEsODNjMCwxOC40Ni0xNSwzMy40My0zMy40MywzMy40M1M1NSw5OC44Miw1NSw4Mi42MnM4LjA4LTMzLDI2LjU0LTMzQzExMy41LDQ5LjYzLDEyMS44MSw2NC41LDEyMS44MSw4M1oiLz48L3N2Zz4=" alt="Logo Sekolah" class="logo">
            <div class="background-text">Selamat Datang!</div>
            <h1>Selamat Datang!</h1>
            <p>Ikuti tahapan proses pendaftaran dengan telitidan sesuai<br>dengan data kamu ya!</p>
            
            <div class="buttons">
                <button class="btn btn-back">KEMBALI</button>
                <button class="btn btn-register">DAFTAR</button>
            </div>
        </div>
    </div>
</body>
</html>