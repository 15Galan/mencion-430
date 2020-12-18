main = do  
    putStrLn "Hola, ¿cómo te llamas?"

    nombre <- getLine
    
    putStrLn ("¡Encantado de conocerte, " ++ nombre ++ "!")

