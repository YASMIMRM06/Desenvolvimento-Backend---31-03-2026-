# Desenvolvimento-Backend---31-03-2026-

from collections import deque

class FilaExame:
    def __init__(self):
        self.fila = deque()

    def solicitar_exame  (self, exame: str):
       self.fila.append(exame)

    def processar_exame(self):
        if self.fila:
            return self.fila.popleft()

if __name__ == "__main__":

    atendimento = FilaExame()
    
    atendimento.solicitar_exame( 'Hemograma')
    atendimento.solicitar_exame( 'Glicemia')
    atendimento.solicitar_exame( 'Testo Livre')
    atendimento.solicitar_exame( 'Dengue')      
    atendimento.solicitar_exame( 'Colesterol')


    print( f'Fila :{atendimento.fila}')

    while True:
        input()
        atendimento.processar_exame()
    print( f'Fila :{atendimento.fila}')



    para subir o docker e
    docker compose up
    para para e ctrl+c
    para derrubar o container e docker compose down
    