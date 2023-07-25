describe('users', () => {
  it('visits the users url', () => {
    cy.visit('/users')
    cy.contains('h3', 'Users')
  })

  it('visits the user url', () => {
    cy.visit('/user/1')
    cy.contains('h3', 'Weather at')
  })
})
