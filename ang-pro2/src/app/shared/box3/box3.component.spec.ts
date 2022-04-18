import { ComponentFixture, TestBed } from '@angular/core/testing';

import { Box3Component } from './box3.component';

describe('Box3Component', () => {
  let component: Box3Component;
  let fixture: ComponentFixture<Box3Component>;

  beforeEach(async () => {
    await TestBed.configureTestingModule({
      declarations: [ Box3Component ]
    })
    .compileComponents();
  });

  beforeEach(() => {
    fixture = TestBed.createComponent(Box3Component);
    component = fixture.componentInstance;
    fixture.detectChanges();
  });

  it('should create', () => {
    expect(component).toBeTruthy();
  });
});
